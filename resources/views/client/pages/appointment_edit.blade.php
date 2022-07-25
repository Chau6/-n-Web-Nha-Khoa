@extends('client.master')

@section('content')
    <!--Start Appointment area -->
<div class="appointment-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title max-width text-center">
                    <h1>Make an Appointment</h1>
                    <p>Here you can get doctors available time & you can get your perfect visiting time to hospital.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="appointment-form-left">
                  <form action="{{ route('client.pages.update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Patient Name</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <input type="text" name="name" id="p_name" value="{{$edit->name}}" placeholder="Patient Name*" required pattern="[A-Za-z]{1,}" title="Please enter your name"> 
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <input type="text" name="phone" value="{{$edit->phone}}" placeholder="Ph Num*" required pattern="[0-9]{10}" title="Please enter your phone number, must be 10 number">   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Age</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <input type="text" name="age" id="age" value="{{$edit->age}}" placeholder="Age" required pattern="[0-9]{1,2}" title="Please enter your age">
                                    </div>     
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Doctor</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Date</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <input type="text" name="date" value="{{$edit->date}}" class="date-input" id="date-in" placeholder="Date">
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Available at</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <select class="selectmenu" name="time">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="single-box">
                                <div class="title">
                                    <h5>Service</h5>
                                </div>
                                <div class="input-box">
                                    <div class="col-xl-6">
                                        <select class="selectmenu" name="service" id="service">
                                            <option {{ $edit->service == 'Dental Implants' ? 'selected':'' }}>Dental Implants</option>
                                            <option {{ $edit->service == 'Cosmetic Dentistry' ? 'selected':'' }}>Cosmetic Dentistry</option>
                                            <option {{ $edit->service == 'Laser Dentistry' ? 'selected':'' }}>Laser Dentistry</option>
                                            <option {{ $edit->service == 'Orthodontics' ? 'selected':'' }}>Orthodontics</option>
                                            <option {{ $edit->service == 'Endodontics' ? 'selected':'' }}>Endodontics</option>
                                            <option {{ $edit->service == 'Periodontics' ? 'selected':'' }}>Periodontics</option>
                                        </select>    
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="description" placeholder="Description...">{{$edit->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="button-box">
                        <button class="btn-one" style="margin:0px 560px" type="submit">Confirm</button>     
                    </div>   
                  </form>   
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Appointment area -->

@endsection