<a class="btn btn-success" data-toggle="modal" data-target="#createModal" href=""><i class="fas fa-plus-square"></i></a>

  <div class="modal fade" id="createModal"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">NUEVOS TEMAS</h4>    
            </div>
            <div class="modal-body">
                <form action="{{ url('temas') }}" method="post" entype="multipart/form-data">
                    @csrf
                    @include('tema.form', ['modo' => 'Guardar'])
                    
                </form>
        </div>

       </div>

    </div>
</div>
