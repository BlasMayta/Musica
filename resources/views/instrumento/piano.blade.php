<!-- 
@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="css/Piano.css">

<link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection


@section('title', 'INSTRUMENTOS')



@section('content_header')


    <div class="card card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2>INSTRUMENTOS</h2>
                         <h2>PIANO</h2>  
                    </td>
                </tr>
            </table>
        </div>
        <div class="card bg-whitw">
          <div class="card bg-dark">
                  <div class="ul_1">
                    <ul class="set">
                        <li onclick=" jsNota(261.626)" class="white e">Do</li>
                        <li onclick=" jsNota(277.183)" class="black ds">D0#</li>
                        <li onclick=" jsNota(293.665)" class="white d">Re</li>
                        <li onclick=" jsNota(311.127)" class="black cs">Re#</li>
                        <li onclick=" jsNota(329.628)" class="white c">Mi</li>
        
                   
                        <li onclick=" jsNota(349.228)" class="white f">Fa</li>
                        <li onclick=" jsNota(369.994)" class="black fs">Fa#</li>
                        <li onclick=" jsNota(391.995)" class="white g">Sol</li>
                        <li onclick=" jsNota(415.305)" class="black gs">Sol#</li>
                        <li onclick=" jsNota(440.000)" class="white a">La</li>
                        <li onclick=" jsNota(466.164)" class="black as">La#</li>
                        <li onclick=" jsNota(493.883)" class="white b">Si</li>
                       
                      
                    </ul>
        
                  </div>
           </div>
          
        </div>
   </div>
  
@endsection

@section('js')
   
<script src="js/pin.js"></script>
  
    

    
@stop -->
