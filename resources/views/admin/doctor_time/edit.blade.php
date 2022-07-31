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
<form action="{{ route('admin.doctor_time.update', ['id'=> $doctor_day_work->id]) }}" method="POST">  
    @csrf
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Doctor</h3>
      <div class="card-tools">
      </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Doctor ID</label>
            <select class="form-control" name="doctor_id">
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
            <label for="time">Time Work</label>
            <select name="time" id="time">
                <option value="9:00am" {{ $doctor_day_work->time == '9:00am' ? 'selected':'' }}>9:00am</option>
                <option value="11:30am" {{ $doctor_day_work->time == '11:30am' ? 'selected':'' }}>11:30am</option>
                <option value="12:00pm" {{ $doctor_day_work->time == '12:00pm' ? 'selected':'' }}>12:00pm</option>
                <option value="3:00pm" {{ $doctor_day_work->time == '3:00pm' ? 'selected':'' }}>3:00pm</option>
                <option value="4:00pm" {{ $doctor_day_work->time == '4:00pm' ? 'selected':'' }}>4:00pm</option>
                <option value="5:00pm" {{ $doctor_day_work->time == '5:00pm' ? 'selected':'' }}>5:00pm</option>
                <option value="5:30pm" {{ $doctor_day_work->time == '5:30pm' ? 'selected':'' }}>5:30pm</option>
                <option value="6:00pm" {{ $doctor_day_work->time == '6:00pm' ? 'selected':'' }}>6:00pm</option>
                <option value="7:00pm" {{ $doctor_day_work->time == '7:00pm' ? 'selected':'' }}>7:00pm</option>
                <option value="7:30pm" {{ $doctor_day_work->time == '7:30pm' ? 'selected':'' }}>7:30pm</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="date">Date Work</label>
            <input type="text" value="{{$doctor_day_work->date}}" name="date" class="date-input" id="date_in" placeholder="Date">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
        
    </div>
</div>
</form>
@endsection