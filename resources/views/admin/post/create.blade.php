@extends('layouts.main')

@section('content')
    <div id="creatDiv">

        <div class="form-add">
            @if($errors->any())
                <div class="alert alert-danger">
                    @error('key') <p class="error">{{ $message }}</p> @enderror
                    @error('title') <p class="error">{{ $message }}</p> @enderror
                    @error('agent_id') <p class="error">{{ $message }}</p> @enderror
                    @error('sum') <p class="error">{{ $message }}</p> @enderror
                    @error('buy_rent_id') <p class="error">{{ $message }}</p> @enderror
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>

            @endif
            <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label required">{{__('titles.key')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="key"
                               value="{{ old('key') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label required ">{{__('titles.title')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                               value="{{ old('title') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agent_id" class="col-sm-2 col-form-label required">{{__('titles.agent')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agent_id">
                            <option></option>

                            @foreach($agents as $agent)
                                <option
                                    value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label required">{{__('titles.sum')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="sum">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label required">{{__('titles.buy_rent')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="buy_rent_id">
                            <option></option>
                            @foreach($buyRents as $buyRent)
                                <option name="buy_rent_id"
                                        value="{{ $buyRent->id }}">{{ $buyRent->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.region')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="region_id">
                            <option></option>
                            @foreach($regions as $region)
                                <option name="region"
                                        value="{{ $region->id }}">{{ $region->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.city')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="city_id" id="city">
                            <option></option>
                            @foreach($citys as $city)
                                <option class="city-erevan" name="city_id"
                                        value="{{ $city->id }}">{{ $city->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3" id="erevan" style="display: none">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.district')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="district_id" id="city">
                            <option></option>
                            @foreach($districts as $district)
                                <option name="district_id"
                                        value="{{ $district->id }}">{{ $district->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.village')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option></option>
                            @foreach($villages as $village)
                                <option name="village_id"
                                        value="{{ $village->id }}">{{ $village->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.street')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="street_id">
                            <option></option>
                            @foreach($streets as $street)
                                <option name="street_id"
                                        value="{{ $street->id }}">{{ $street->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.type')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="type_id">
                            <option></option>
                            @foreach($types as $type)
                                <option name="type_id"
                                        value="{{ $type->id }}">{{ $type->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.building_type')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="building_type_id">
                            <option></option>
                            @foreach($buildingTypes as $buildingType)
                                <option name="buildingtype_id"
                                        value="{{ $buildingType->id }}">{{ $buildingType->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.building_number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="building_number"
                               value="{{ old('buildingNumber') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.apartament_number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="apartament_number"
                               value="{{ old('apartamentNumber') }}">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.floor')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="floor">
                            <option></option>
                            @for($i=1;$i<=20;$i++)
                                <option name="floor"
                                        value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.room')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="room">
                            <option></option>
                            @for($i=1;$i<=10;$i++)

                                <option name="room"
                                        value="{{$i}}">{{$i}}</option>
                            @endfor

                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.swimming')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="swimming">
                            <option value="0"></option>
                            <option name="swimming" value="1">այո</option>
                            <option name="swimming" value="0">ոչ</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.tel')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tel"
                               value="{{ old('tel') }}">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.map_city')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="map_city"
                               value="{{ old('map_city') }}">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.map_street')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="map_street"
                               value="{{ old('map_street') }}">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.map_number')}}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="map_number"
                               value="{{ old('map_number') }}">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.informations')}}</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="informations" id="exampleFormControlTextarea1"
                                  rows="3">{{ old('informations') }}</textarea>
                    </div>
                </div>


                {{--            <div class="formCreat">--}}
                {{--                <label> lat--}}
                {{--                    <input type="text" name="lat">--}}
                {{--                </label>--}}
                {{--            </div>'--}}
                {{--            <div class="formCreat">--}}
                {{--                <label> long--}}
                {{--                    <input type="text" name="long">--}}
                {{--                </label>--}}
                {{--            </div>--}}

                <div style="width: 14rem;">
                    <label class="form-label" for="customFile">{{ __('titles.upload_img' )}}</label>
                    <input type="file" class="form-control" id="customFile" name="files[]" multiple>
                </div>

                <div style="width: 14rem;">
                    <label class="form-label" for="customFile">{{ __('titles.upload_video' )}}</label>
                    <input type="file" class="form-control" id="customFile" name="video[]" multiple>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">{{ __('buttons.Sign' )}}</button>
                    </div>
                </div>

            </form>
        </div>
@endsection

