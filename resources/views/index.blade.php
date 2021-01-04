<x-pagelayout>
@section('title', 'Home')

    <div class="container">
        <div class="row my-4">
            <div class="col-md-6">
                <div class="mission">
                    <h4>Geneva Vision</h4>
                    <p>မြန်မာနိုင်ငံရှိ Caregiver Service များအားလုံးထက် ယုံကြည်စိတ်ချရဆုံးဖြစ်စေရန်</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mission">
                    <h4>Geneva Mission</h4>
                    <p>အကောင်းဆုံးပြုစုစောင့်ရှောက်ခြင်းဝန်ဆောင်မှုပေးနိုင်ရန်နှင့် လူငယ်များကို အလုပ်အကိုင်အခွင့်အလမ်း ပေးနိုင်ရန်</p>
                </div>
            </div>
        </div>

        <!-- How to Record History -->
        <div class="record my-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>
                        How to record History?
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 py-4"><!--explain with text-->
                    <ol class="record-history">
                        <li>Go to navigation bar</li>
                        <li>Add History</li>
                        <li>Choose <strong>Child case</strong> or <strong>Elder case</strong>.</li>
                        <li>Please fill all fields</li>
                        <li>And press <strong>Save</strong></li>
                    </ol>
                </div>
                <div class="col-md-6 mt-4"><!--explain wiht picture-->
                    <img src="{{asset('images/navbar1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <!-- How to view and edit History -->
        <div class="edit my-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>
                        How to view & edit History?
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 py-4"><!--explain with text-->
                    <ol class="record-history">
                        <li>Go to navigation bar</li>
                        <li>Patient List</li>
                        <li>Choose <strong>patient name</strong> to view or edit</li>
                        <li>Go to bottom of history</li>
                        <li><strong>Edit History</strong></li>
                        <li>Finish editing and press <strong>Update</strong></li>
                    </ol>
                </div>
                <div class="col-md-6 mt-4"><!--explain wiht picture-->
                    <img src="{{asset('images/edit.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="welcome my-0">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('images/welcome.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div><!--end of container-->

</x-pagelayout>