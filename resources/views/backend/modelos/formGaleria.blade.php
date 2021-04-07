@extends('backend.layout')

@section('content')
<div class="card" id="form">
  <div class="card-header">
    <strong class="card-title">Galeria de Imagenes {{ $modelo->nombre }}</strong>
  </div>
  <div class="card-body">
    <div class="content" id="content_dropzone">
      <div class="dropzone needsclick dz-clickable dz-started" id="dropzone-gallery-modelos">
        <div class="dz-message text-center mb-3" data-dz-message>
          <span><i class="fas fa-upload"></i> Clic o arrastrar los archivos aquí para subir.</span>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('page-script')
<script type="text/javascript">
  
  Dropzone.autoDiscover = false;
  if (document.getElementById('dropzone-gallery-modelos')) {
    var dropzoneCursoFiles = new Dropzone("#dropzone-gallery-modelos",{
      url: "{{route('modelo-gallery.update', $modelo->id)}}",
      method: "POST",
      acceptedFiles: ".jpeg, .jpg, .png,.webp",
      addRemoveLinks: true,
      thumbnailWidth: 50,
      thumbnailHeight: 50,
      previewTemplate: `
        <div class="dz-preview dz-file-preview">
        <div class="dz-details">
          <img data-dz-thumbnail style="width: 110px;"/>
        </div>
        <div class="dz-progress progress mt-1">
          <span class="dz-upload progress-bar" data-dz-uploadprogress></span>
        </div>
        <div class="dz-error-message"><span data-dz-errormessage></span></div>
      </div>
      `,
      init: function() {
        this.on("success", function(file, response) {
          console.log(response)
            notifier.show('Hecho!', 'La imagen se cargó correctamente.', '', '/imagenes/icons/success.png', 3500);
        });
        //display photos
        var mocks = {!! $modelo->gallery->photos !!};
        console.log(mocks);
        for (var i = 0; i < mocks.length; i++) {
            var mock = {  
                    id: mocks[i].id ,
                    path: mocks[i].public_path,
                    type: 'image/jpeg',
                    accepted: true,
            };
            this.files.push(mock);
            this.emit('addedfile', mock);
            this.emit("thumbnail", mock, mock.path);
            this.emit('complete', mock);
        }
      },
      sending: function(file, xhr, formData) {
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("_method", "put");
      },
      removedfile: function(file) {
        axios
          .delete("/admin/file/"+file.id)
          .then(res=>{
            console.log(res)
            file.previewElement.remove();
            notifier.show('Hecho!', 'La imagen se eliminó correctamente.', '', '/imagenes/icons/success.png', 3500);
          })
      },
    });
  }

</script>
@stop