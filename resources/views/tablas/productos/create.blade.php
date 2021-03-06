@extends('layout.plantilla')
@section('contenido')
<h1> CREAR PRODUCTO</h1>

<form method = "POST" action = "{{route('producto.store')}}"  >
    @csrf   
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" placeHolder="Ingrese descripcion">
        
        @error('descripcion')
            <span class = "invalid-feedback" role ="alert">
                <strong>{{ $message }} </strong>
            </span>
        @enderror  
    
      </div>
      <div class="form-group">
        <label for="descripcion">Categoria</label>
        <select class="form-control @error('codcategoria') is-invalid @enderror" id="codcategoria" name="codcategoria" >
          @foreach($categoria as $itemCategoria)
            <option value="{{$itemCategoria['codcategoria']}}"> 
                {{$itemCategoria['descripcion']}}
            </option>

          @endforeach
        </select>
      </div>
      
      <div class="form-group">
        <label for="codunidad">Unidad</label>
        <select class="form-control @error('codunidad') is-invalid @enderror" id="codunidad" name="codunidad" >
          @foreach($unidad as $itemUnidad)
            <option value="{{$itemUnidad['codunidad']}}"> 
                {{$itemUnidad['descripcion']}}
            </option>

          @endforeach
        </select>
      </div>
      
      <div class="row">
              <div class="col-md-4">
            
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" >
                        @error('stock')
                            <span class = "invalid-feedback" role ="alert">
                                <strong>{{ $message }} </strong>
                            </span>
                        @enderror  
                </div>

              </div>
          <div class="col-md-4">
        
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control @error('precio') is-invalid @enderror" id="precio" name="precio" >
                      @error('precio')
                        <span class = "invalid-feedback" role ="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                      @enderror  
            
          </div>
          </div>
      </div>
      
  
    <button type="submit" class="btn btn-primary">   <i class="fas fa-save"> </i> Grabar </button>
    <a href = "{{route('producto.index')}}" class = "btn btn-danger">
        <i class="fas fa-ban"> </i> Cancelar </a>




</form>



@endsection