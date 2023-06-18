@extends('front/layout')
@section('page_title', 'About Us')
@section('container')
    <!-- About Section start -->
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6">
                <h1 class="px-2">About US</h1>
                <p class="text-secondary text-justify px-2" style="font-size: 18px">
                    We are a charity non profit organisation based in the UK (EST 2015).
                    It is a charitable organisation which serves the poor and needy in
                    Bangladesh and also the underprivileged in the UK.
                </p>
                <p class="text-secondary text-justify px-2" style="font-size: 18px">
                    Alhamdulillah we have carried out many projects including holding
                    food banks for the underprivileged and homeless, distributing aid in
                    Bangladesh fo the flood victims and needy.
                </p>
                <p class="text-secondary text-justify px-2" style="font-size: 18px">
                    Al Ubayd Foundation is a registered charity ( Charity Reg No 1198160
                    ) working as a voluntary charity organisation for the Jamea Ubaydul
                    Haque Rh, Orphanage & Women’s Centre
                </p>
                <p class="text-secondary text-justify px-2" style="font-size: 18px">
                    Our next main project in Bangladesh is to complete the Women Centre
                    which will be one of the first women centre in Sylhet. It will
                    provide islamic education and lifestyle classes for women from all
                    social backgrounds including sewing classes, health and wellness
                    classes etc. Al Ubayd Foundation has a 100% donation policy and all
                    proceeds goes towards completing the project.
                </p>
            </div>
            <div class="col-md-6 my-auto">
                <img class="img-fluid" src="{{ asset('front_assets/images/1 (9).jpeg') }}" alt="" />
            </div>
        </div>
        <hr />
        <div class="row my-5 px-2">
            <div class="col-md-12">
                <h2 class="mb-3">
                    Al Ubayd Foundation has completed many projects in Bangladesh such
                    as
                </h2>
                <ul style="font-size: 18px">
                    <li>
                        Completed the building of Jamea Ubaydul Haque Yateem Khana
                        (orphanage) and Madrassah
                    </li>
                    <li>Qurbani Project</li>
                    <li>Distribution of food packages</li>
                    <li>Aid package relief</li>
                    <li>Medical camp</li>
                    <li>Winter blanket distribution</li>
                    <li>Water pump project</li>
                    <li>Rebuilding homes project</li>
                    <li>Distributing tins for damged homes</li>
                    <li>Supporting flood victims</li>
                    <li>Helping widows and orphans</li>
                    <li>Providing a source of income for the poor.</li>
                    <li>Gifting a cow/goat meal to orphange</li>
                    <li>Gifting sewing machine</li>
                </ul>
            </div>
        </div>
        <div class="row my-5 px-2">
            <div class="col-md-12">
                <h2 class="mb-3">
                    We also carry out many projects in the UK, such as
                </h2>
                <ul style="font-size: 18px">
                    <li>Weekly Food Bank for low income families</li>
                    <li>
                        Atleast 5 yearly charity events held to bring communities together
                    </li>
                    <li>Distribution of hot meal to the homeless</li>
                    <li>Al Ridhwana Academy Madrassah (Est 2013)</li>
                    <li>Al Ubayd Academy Madrassah Kedleston (Est 2016)</li>
                    <li>Al Ubayd Academy Cranbrook (Est 2020)</li>
                    <li>Teacher training programs</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- About Section end -->
@endsection
