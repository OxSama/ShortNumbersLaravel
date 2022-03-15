<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h1 class="title" style="font: 18px bold">
                 استمارة تجديد ترخيص الرقم {{ $numberToSubmit->number }}
            </h1>
        </div>
    </div>
    <div class="card-body">

        <form action="/customer/license" method="POST">
            @csrf
            <section>
                <div class="row">
                    <div class="col">
                        <label for="">اسم الجهه مقدمة الطلب(شركة او اسم عمل )</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for=""> نوع ونشاط الخدمة</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col">
                        <label for=""> العنوان</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">الهاتف /الفاكس</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">البريد الالكتروني </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col">
                        <label for="">إسم الشخص المفوض</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">وظيفة الشخص المفوض</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">هاتف الشخص المفوض</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">البريد الالكتروني للشخص المفوض</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col">
                        <label for=""> الاسم التجاري </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="form-control btn btn-primary" name="licenseRenewalForm">ارسال</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
