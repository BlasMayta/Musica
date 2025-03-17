<a class="btn btn-success" data-toggle="modal" data-target="#createModal" href=""><i class="fas fa-plus-square"></i></a>

  <div class="modal fade" id="createModal"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <br>
                <h4 class="modal-title" id="staticBackdropLabel">FORMULARIO DE REGISTRO - NUEVO TUTOR</h4> 
                <br>   
            </div>
            <div class="modal-body">
                <form action="{{ url('tutors') }}" method="post" entype="multipart/form-data">
                    @csrf
                    @include('tutor.form', ['modo' => 'Guardar'])
                    
                </form>
        </div>

       </div>

    </div>
</div>
