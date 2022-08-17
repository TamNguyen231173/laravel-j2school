<?php

namespace App\Http\Controllers;

use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    use ResponseTrait;
    public function __construct()
    {
        $this->model = (new Doctor())->query();
    }

    public function index(Request $request)
    {
        $search = $request->get('q');
        $doctors = $this->model->with('specialist:id,name')
            ->where('name', 'like', '%' . $search . "%")
            ->orwhere('phone', 'like', '%' . $search . "%")
            ->orwhere('email', 'like', '%' . $search . "%")
            ->paginate();
        $doctors->appends(['q' => $search]);
        return view('admin.doctor.index', [
            'doctors' => $doctors,
            'search' => $search,
        ]);
    }

    public function api(Request $request)
    {

        $data = $this->model
            ->select('id', 'name')
            ->where('specialist_id', '=',  $request->get('id'))
            ->get();
        return $this->successResponse($data);
    }


    public function create()
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.create', [
            'specialists' => $specialists,
        ]);
    }

    public function store(StoreRequest $request)
    {
        $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
        $object = new doctor();
        $object->fill($request->validated());
        $object['avatar'] = $path;
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function show(doctor $doctor)
    {
    }

    public function edit(doctor $doctor)
    {
        $specialists = Specialist::query()->get();
        return view('admin.doctor.edit', [
            'doctor' => $doctor,
            'specialists' => $specialists,
        ]);
    }

    public function update(UpdateRequest $request, $doctor)
    {
        $object = Doctor::query()->find($doctor);
        $object->fill($request->validated());
        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatars', $request->file('avatar'));
            $object['avatar'] = $path;
        }
        $object->save();
        return redirect()->route('doctor.index');
    }

    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }

    public function doctor(Request $request)
    {
        $doctors = $this->model
            ->when($request->has('price_sort'), function ($q) {
                return $q->orderBy('price', request('price_sort'));
            })
            ->paginate(9);
        $doctors->appends(['price_sort' => $request->get('price_sort')]);
        $max_price = $doctors->max('price');
        $min_price = $doctors->min('price');
        return view('user.doctor.index', [
            'doctors' => $doctors,
            'price_sort' => request('price_sort'),
            'min_price' => $min_price,
            'max_price' => $max_price,
        ]);
    }

    public function search(Request $request)
    {
        $doctors = $this->model
            ->with('specialist:id,name')
            ->where('name', 'like', '%' . $request->key . '%')
            ->paginate();
        $max_price = $doctors->max('price');
        $min_price = $doctors->min('price');
        return view('user.doctor.search', [
            'doctors' => $doctors,
            'min_price' => $min_price,
            'max_price' => $max_price,
        ]);
    }
}
