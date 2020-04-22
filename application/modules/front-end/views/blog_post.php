<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>โพสบล็อค</h1>
        <!-- <span>Forms Widget</span> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page">โพสบล็อค</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="form-widget">

                <div class="form-result"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <form class="row" id="freelance-quote" action="blog_post_success" method="post" enctype="multipart/form-data">
                            <div class="form-process"></div>
                            <div class="col-12 form-group">
                                <label>หัวข้อเรื่อง:</label>
                                <input type="text" name="topic" id="freelance-quote-name" class="form-control required" value="" placeholder="หัวข้อที่จะโพส">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12 form-group">
                                <label>รายละเอียด:</label>
                                <textarea name="detail" id="freelance-quote-additional-notes" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>รูปภาพปก:</label>
                                <input type="file" id="freelance-quote-sample" name="file_name" class="file-loading" data-show-preview="false" />
                            </div>
                            <div class="col-12 hidden">
                                <input type="text" id="freelance-quote-botcheck" name="freelance-quote-botcheck" value="" />
                            </div>
                            <div class="col-12">
                                <button type="submit" name="freelance-quote-submit" class="btn btn-success">โพสบล็อค</button>
                            </div>

                            <input type="hidden" name="prefix" value="freelance-quote-">
                        </form>
                    </div>


                </div>

            </div>

        </div>

    </div>

</section><!-- #content end -->