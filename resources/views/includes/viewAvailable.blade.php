<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h1 style="font: 18px bold;margin-left: 45%;" dir="rtl">
                الارقام المتاحة
            </h1>
        </div>
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th scope='col'>الرقم</th>
                <th scope='col'>الباقة</th>
                <th scope='col'>رسوم الترخيص</th>
                <th scope='col'>نسبة التجديد</th>
                <th scope='col'>حجز الرقم</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($numbers as $number )
              <tr>
                <th scope="row">{{ $number->number }}</th>
                <td>{{ $number->categ }}</td>
                <td>{{ $number->category->price }}</td>
                <td>%{{ $number->category->renewal_fees_percentage }}</td>
                <td><a href="/customer?licenseNumber={{ $number->id }}">{{ $number->id }}</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>

    </div>
</div>
