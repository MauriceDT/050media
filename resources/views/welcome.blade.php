@include('partials.header')
@include('partials.navbar')

<div class="main-div">
    <div class="main-div-title d-flex justify-content-center align-items-center">
        <h1 class="main-title mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</h1>
    </div>
    <div class="div4squares d-flex row">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    {{-- Modal that fades in from right side --}}
    <div class="modal-bg">
        <div class="modal-right">
            <h2>Winkelwagen</h2><span class="modal-close">X</span>
            <button>Bekijk winkelwagen</button>
        </div>
    </div>
</div>



@include('partials.footer')
