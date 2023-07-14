<!-- Featured Post Part Start -->
<section class="featured-post">
    <div class="container2">
        <h2>Featured Posts</h2>

        <div id="postinner">


        </div>

    </div>
</section>
<!-- Featured Post Part End -->


<script>
    postDetails();
    async function postDetails(){
        let url = '/articleData';

        const response = await axios.get(url);
        response.data.forEach((item)=>{
            $postid = item.id;
            document.getElementById('postinner').innerHTML +=(`<div class="post">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="${item['thumbnail']}" class="img-fluid" alt="Post 1">
                </div>
                <div class="col-lg-9 col-md-6 col-sm-6 imgClass">
                    <div class="content">
                        <h4><a href="{{url('/postDetails/$postid')}}"">${item['title']}</a></h4>
                        <p>${item['content']}
                        </p>
                    </div>
                </div>
            </div>
        </div>`);
        })
    }
</script>
