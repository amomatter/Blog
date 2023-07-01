<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">POSTS </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
                @foreach($posts as $item)
                <div class="col-md-4">
                    <div><img src="/postImage/{{$item->image}}" class="services_img"></div>
                    <p style="text-align: center; font-weight: 900">{{$item->title}}</p>
                    <p style="text-align: center; font-weight: 900">Posted by: {{ $item->name}}</p>

                    <div class="btn_main"><a href="{{url('post_details',$item->id)}}">read more</a></div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
