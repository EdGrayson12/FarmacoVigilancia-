<template>
            <main class="main">
            <!-- Breadcrumb -->
           
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Pacientes
                         <button type="button" @click="abrirModal('categoria','registrar')" class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" id="opcion" name="opcion">
                                      <option value="nombre">Nombre</option>
                                      <option value="telefono">Telefono</option>
                                      <option value="correo">Correo</option>
                                      <option value="edad">Edad</option>
                                      <option value="sexo">Sexo</option>
                                      <option value="estatura">Estatura</option>
                                      <option value="peso">Peso</option>
                                    <option value="medicamento">Medicamento</option>
                                    <option value="dosis">Dosis</option>
                                    <option value="efecto_adverso">Efectos Adversos</option>
                                    <option value="comentarios">Comentarios</option>
                                    
                                    
                                    
                                    </select>
                                    <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Editar/Elimiar</th>
                                    <th>Iniciales del Paciente</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Estatura</th>
                                    <th>Peso</th>
                                    <th>Medicamento</th>
                                    <th>Dosis</th>
                                    <th>Efectos Adversos</th>
                                    <th>Municipio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="categoria in arrayCategoria" :key="categoria.id">
                                    <td>
                                        <button type="button" @click="abrirModal('categoria','actualizar',categoria)" class="btn btn-warning btn-sm">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                      <template v-if="categoria.condicion">
                                          <button type="button" class="btn btn-danger btn-sm" @click="desactivarCategoria(categoria.id)">
                                            <i class="icon-trash"></i>  

                                          </button>
                                          
                                          </template>

                                          <template v-else>
                                          <button type="button" class="btn btn-info btn-sm" @click="activarCategoria(categoria.id)">
                                            <i class="icon-ok"></i>  

                                          </button>
                                          
                                          </template>
                                    </td>
                                    <td v-text="categoria.nombre"></td>
                                    <td v-text="categoria.telefono"></td>
                                    <td v-text="categoria.correo"></td>
                                    <td v-text="categoria.edad"></td>
                                    <td v-text="categoria.sexo"></td>
                                    <td v-text="categoria.estatura"></td>
                                    <td v-text="categoria.peso"></td>
                                    <td v-text="categoria.medicamento"></td>
                                    <td v-text="categoria.dosis"></td>
                                    <td v-text="categoria.efecto_adverso"></td>
                                    <td v-text="categoria.comentarios"></td>
                                    <td>
                                        <div v-if="categoria.condicion">
                                            <span class="badge badge-success">Activo</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Desactivado</span>
                                        </div>
                                        
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Ant</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Iniciales del Paciente">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Telefono</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="telefono" class="form-control" placeholder="Ingrese su Telefono">
                                    </div>
                               
                               
                               
                               
                               
                                </div>
                               
                               
                               
                               
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Correo</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="correo" class="form-control" placeholder="Correo">
                                        
                                    </div>
                                    
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Edad</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="edad" class="form-control" placeholder="Ingrese Edad">
                                        
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Sexo</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="sexo" class="form-control" placeholder="Masculino/Femenino ">
                                        
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Estatura</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="estatura" class="form-control" placeholder="Ingrese Estatura">
                                        
                                    </div>
                                    
                                </div>


                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Peso</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="peso" class="form-control" placeholder="Ingrese Peso">
                                        
                                    </div>
                                    
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Medicamento </label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="medicamento" class="form-control" placeholder="Nombre Generico">
                                        
                                    </div>
                                    
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Dosis</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="dosis" class="form-control" placeholder="Dosis Ingerida">
                                        
                                    </div>
                                    
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Efectos Adversos</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="efecto_adverso" class="form-control" placeholder="Ingrese las reacciones secundarias ">
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Municipio</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="comentarios" class="form-control" placeholder=" ">
                                        
                                    </div>
                                    
                                </div>


                                <div v-show="errorCategoria" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjCategoria" :key="error" v-text="error">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarCategoria()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarCategoria() ">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
           
        </main>
</template>

<script>
    export default {
        data (){
            return {
                categoria_id: 0,
                nombre : '',
                telefono :'',
                correo:'',
                edad: '',
                sexo:'',
                estatura:'',
                peso:'',
                medicamento:'',
                dosis:'',
                efecto_adverso:'',
                comentarios:'',
                
                arrayCategoria : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
               //Variables para validacion
               errorCategoria : 0,
                errorMostrarMsjCategoria : []
            }
        },
        methods : {
            listarCategoria (){
                let me=this;
                axios.get('/categoria').then(function (response) {
                    me.arrayCategoria = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            registrarCategoria(){
                if (this.validarCategoria()){
                    return;
                }
                
                let me = this;
 
                axios.post('/categoria/registrar',{
                    'nombre': this.nombre,
                   'telefono':this.telefono,
                   'correo':this.correo,
                   'edad':this.edad,
                   'sexo':this.sexo,
                   'estatura':this.estatura,
                   'peso':this.peso,
                   'medicamento':this.medicamento,
                   'dosis':this.dosis,
                   'efecto_adverso':this.efecto_adverso,
                   'comentarios':this.comentarios,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarCategoria();
                }).catch(function (error) {
                    console.log(error);
                });
            },
            actualizarCategoria(){
               if (this.validarCategoria()){
                    return;
                }
                
                let me = this;
 
                axios.put('/categoria/actualizar',{
                    'nombre': this.nombre,
                   'telefono':this.telefono,
                   'correo':this.correo,
                   'edad':this.edad,
                   'sexo':this.sexo,
                   'estatura':this.estatura,
                   'peso':this.peso,
                   'medicamento':this.medicamento,
                   'dosis':this.dosis,
                   'efecto_adverso':this.efecto_adverso,
                   'comentarios':this.comentarios,
                    'id':this.categoria_id,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarCategoria();
                }).catch(function (error) {
                    console.log(error);
                });   


            },
            desactivarCategoria(){
                const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
             },
             buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})

            },
            validarCategoria(){
                this.errorCategoria=0;
                this.errorMostrarMsjCategoria =[];

                if (!this.nombre) this.errorMostrarMsjCategoria.push("El nombre del paciente no puede estar vacío.");
                if(!this.telefono)this.errorMostrarMsjCategoria.push("El telefono no puede estar vacion");
                if (this.errorMostrarMsjCategoria.length) this.errorCategoria = 1;

                return this.errorCategoria;
            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombre='';
                this.descripcion='';
            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "categoria":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Paciente';
                                this.nombre= '';
                               this.telefono='';
                               this.correo='';
                               this.edad='';
                               this.sexo='';
                               this.peso='';
                               this.medicamento='';
                               this.dosis='';
                               this.efecto_adverso='';
                               this.comentarios='';
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'actualizar':
                            {
                                
                                this.modal=1;
                                this.tituloModal='Actualizar Paciente';
                                this.tipoAccion=2;
                               
                               this.categoria_id= data['id'];
                                  this.nombre= data['nombre'];
                                this.telefono =data['telefono'];
                                this.correo = data['correo'];
                                 this.edad = data['edad'];
                                  this.sexo = data['sexo'];
                                   this.estatura = data['estatura'];
                                    this.peso = data['peso'];
                                    this.medicamento = data['medicamento'];
                                    this.dosis = data['dosis'];
                                    this.efecto_adverso = data['efecto_adverso'];
                                    this.comentarios = data['comentarios'];
                                    

                                   
                   
                                
                                break;
                            }
                        }
                    }
                }
            }
        },
        mounted() {
            this.listarCategoria();
        }
    }
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>
