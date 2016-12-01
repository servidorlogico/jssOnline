@extends('body.main')
    @section('content')
        @foreach($posts as $post)
            <div class="row">
        <div class="col-md-1 col-lg-2"></div>
      <div class="col-md-10 col-lg-8">
          <div class="box box-black">
            <div class="box-header with-border">
              <a href="{{ route('user.profile',$post->userpost->nickname) }}"> <strong>{{ $post->userpost->name.' '.$post->userpost->lastname }}</strong></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-12">
                  <div class="pad">
                  <div class="row">
                    <div class="col-md-12">
                      <p>{{ $post->description }}</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      
                      
                    </div>
                  </div>
                  
                    
                  </div>
                </div>
               
              </div>
              <!-- /.row -->
            </div>
            <div class="box-footer with-border">
              <div class="box-tools pull-lef">
                <a href="#"> <i class="fa fa-thumbs-o-up"></i> Me gusta </a>
                <a href="#"> <i class="fa fa-comment"></i> Comentar</a>
                <a href="#"> <i class="fa fa-share"></i> Compartir</a>
                
                
              </div>
            </div>
        
          </div>
      </div>
      <div class="col-md-1 col-lg-2"></div>
        
      </div>
        @endforeach
    @endsection
    @section('script')
    
        $("#public" ).click(function() {
        
            var content = $('#post_content').val();
            var _token  = $("input[name='_token']").val();
            ///alert(_token);
            //alert(content);
            $.ajax({
            url:'/post',
            headers:{'X-CSRF-TOKEN':_token},
            type:'POST',
            dataType: 'JSON',
            data: {
                    post:content
                },
            success: function (data){
                
            }
                   
            
            });
        });
        

    @endsection