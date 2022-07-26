 @extends('admin.master') 

@section('content')   
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.dat_lich.update', ['id' => $edit->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        <div class="card-tools">
        </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Patient Name</label>
                <input type="text" class="form-control" name="name" value="{{$edit->name}}" >
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" value="{{$edit->phone}}" >
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" value="{{$edit->age}}" >
            </div>
            <div class="form-group">
                <label>Doctor</label>
                <select class="form-control" name="doctor_name" id="doctor_id">
                    <?php
                        $data=array();
                        $datas=array();
                    ?>
                    @foreach($doctors as $doctor)
                        @if(!empty($doctor))
                            <?php
                                $data['id'] = $doctor->id;
                                $data['fullname'] = $doctor->fullname;
                                $datas[] = $data;
                            ?>
                        @endif
                    @endforeach
                    <?php recursiveOptionDocTime($datas,0);?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" value="{{$edit->date}}" class="date-input form-control">
            </div>
            <div class="form-group">
                <label for="time">Available at</label>
                <select class="selectmenu form-control" name="time">
                    <option value="9:00am" {{ $edit->time == '9:00am' ? 'selected':'' }}>9:00am</option>
                    <option value="11:30am" {{ $edit->time == '11:30am' ? 'selected':'' }}>11:30am</option>
                    <option value="12:00pm" {{ $edit->time == '12:00pm' ? 'selected':'' }}>12:00pm</option>
                    <option value="3:00pm" {{ $edit->time == '3:00pm' ? 'selected':'' }}>3:00pm</option>
                    <option value="4:00pm" {{ $edit->time == '4:00pm' ? 'selected':'' }}>4:00pm</option>
                    <option value="5:00pm" {{ $edit->time == '5:00pm' ? 'selected':'' }}>5:00pm</option>
                    <option value="5:30pm" {{ $edit->time == '5:30pm' ? 'selected':'' }}>5:30pm</option>
                    <option value="6:00pm" {{ $edit->time == '6:00pm' ? 'selected':'' }}>6:00pm</option>
                    <option value="7:00pm" {{ $edit->time == '7:00pm' ? 'selected':'' }}>7:00pm</option>
                    <option value="7:30pm" {{ $edit->time == '7:30pm' ? 'selected':'' }}>7:30pm</option>
                </select> 
            </div>
            {{-- <div class="form-group">
                <label for="service">Service</label>
                <select class="selectmenu form-control" name="service" id="service">
                    <option {{ $edit->service == 'Dental Implants' ? 'selected':'' }}>Dental Implants</option>
                    <option {{ $edit->service == 'Cosmetic Dentistry' ? 'selected':'' }}>Cosmetic Dentistry</option>
                    <option {{ $edit->service == 'Laser Dentistry' ? 'selected':'' }}>Laser Dentistry</option>
                    <option {{ $edit->service == 'Orthodontics' ? 'selected':'' }}>Orthodontics</option>
                    <option {{ $edit->service == 'Endodontics' ? 'selected':'' }}>Endodontics</option>
                    <option {{ $edit->service == 'Periodontics' ? 'selected':'' }}>Periodontics</option>
                </select> 
            </div> --}}
            <div class="form-group">
                <label for="service">Description</label>
                <textarea class="form-control" name="description" placeholder="Description...">{{$edit->description}}</textarea>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
{{-- <pre>
    <?php
        print_r($datas)
    ?>
</pre> --}}
@endsection