@include('includes.head')

<body>

    <div class="container">

        @include('includes.header')

        @include('includes.mainContent')

            <br><br><br>

            <div class="container-fluid" dir="rtl">

                @if ($whatToView=='NumbersLicense')
                    @include('includes.NumbersLicense')
                    <br><br><br>
                @endif




                @if ($whatToView == 'NumbersRenewal' )
                    @include('includes.NumbersRenewal')
                    <br><br><br>
                @endif


                @if ($whatToView == 'contact')
                @include('includes.contact')

                <br><br><br>
                @endif


                <section>
                    @if ($availablePackages == 'true')
                        {{-- @include('includes.availablePackages') --}}
                        @include('includes.availablePacakges')
                    @endif
                </section>

                <section>
                    @if ($viewAvailable == 'true')
                        @include('includes.viewAvailable')
                    @endif
                </section>



                <br><br><br>

            </div>
    </div>
        {{-- </section> --}}

        @if ($numberToSubmit !== null)

        @include('includes.RenewalForm')
        @endif


    </div>
    </div>

    <br><br><br>



    @include('includes.Footer')

</body>
