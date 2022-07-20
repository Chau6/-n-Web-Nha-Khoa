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
<form action="{{ route('admin.doctor_time.store') }}" method="POST">  
    @csrf
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Create Doctor Time</h3>
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
                    <option value="9:00am" selected="selected">9:00am</option>
                    <option value="11:30am">11:30am</option>
                    <option value="12:00pm">12:00pm</option>
                    <option value="3:00pm">3:00pm</option>
                    <option value="4:00pm">4:00pm</option>
                    <option value="5:00pm">5:00pm</option>
                    <option value="5:30pm">5:30pm</option>
                    <option value="6:00pm">6:00pm</option>
                    <option value="7:00pm">7:00pm</option>
                    <option value="7:30pm">7:30pm</option>
                </select>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default float-right">Reset</button>
            </div>
            
        </div>
    </div>
</form>
@endsection