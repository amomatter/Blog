<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">update post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form    method="post" action="{{route('post.update',$item->id)}}" enctype="multipart/form-data">
                    {{ method_field('patch') }}

                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="recipient-name" class="col-form-label">Post Title:</label>
                        <input style="background: transparent;" type="text" value="{{$item->title}}" name="title" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">description:</label>
                        <textarea  name="description"class="form-control" id="message-text">{{$item->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="file">Selected image :</label>
                        <img  width="100" height="100" src="{{ asset('postImage') . '/' . $item->image }}" class="image">
                    </div>
                        <br>
                    <div class="form-group">
                          <input type="file" name="image" id="file" >
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary">Save Changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
