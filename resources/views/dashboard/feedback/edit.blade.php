@extends('dashboard.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <div class="mb-3">
                    <label for="name" class="form-label">Service Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$feedback->service->name_ar}}">
                </div>
                <div class="mb-3">
                    <label for="offer_type" class="form-label">Service Category</label>
                    <input type="text" class="form-control" name="offer_type" id="offer_type" value="{{$feedback->service->service_category->name_ar}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Doctor</label>
                    <input type="text" class="form-control" disabled value="{{$feedback->doctor->first_name}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Patient</label>
                    <input type="text" class="form-control" disabled value="{{$feedback->patient->name}}">
                </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى سهولة حجز المواعيد ؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->rate1}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى رضاكم عن الوقت المستغرق خلال رحلتكم العلاجية داخل العيادات؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->rate2}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى رضاكم عن سعر الخدمة؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->third}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى رضاكم عن الخدمة الطبية المقدمة؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->fourth}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">هل قام الطبيب بشرح الحالة الطبية والحلول المتاحة والتكلفة بالتفصيل؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->fifth}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى رضاكم عن جودة خدمة الإستقبال؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->sixth}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى رضاكم عن التعقيم والنظافة العامة بالعيادات و مرافقها ؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->seventh}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">مدى احتمالية بأن توصي الأخرين بزيارة عيادات رام؟</label>
                <input type="text" class="form-control" disabled value="{{$feedback->eighth}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Created At</label>
                <input type="text" class="form-control" disabled value="{{$feedback->created_at}}">
            </div>
        </div>
    </div>
@endsection
