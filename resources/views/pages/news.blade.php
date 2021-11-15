@extends('layouts.app')
@section('content')
<div class="page-header page-header-sm" style="">
    <h1 class="text-uppercase page-title">News & Events</h1>
</div>
<div class="breadcrumb">
    <div class="container">
        <ol>
            <li><a href="Home">Home</a></li><li>News</li>
        </ol>
    </div>
</div>
<div class="container content-container">
	<div class="row">
            <div class="page-content col-md-9">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-md-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="row anps-blog">
                                @if (count($posts) > 0)
                                    @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <article id="post-1241" class="post-1241 post type-post status-publish format-standard has-post-thumbnail hentry category-care category-health category-medical tag-beautiful tag-eco tag-green">
                                            <header>
                                                <img style="width:100%; height:100px" src="admin/postimages/0c34be09831e0a4456d6dba1d36cf249jpeg" alt="Historical development" class="attachment-large size-large wp-post-image">
                                                <a href="">
                                                    <h3 class="post-title text-uppercase">{{$post->title}}</h3>
                                                </a>
                                                <p  class="mb-30" style="margin-left:40px"><b>Category : </b> <a href="category.php?catid=8">{{$post->name}}</a></p>
                                                <ul class="post-meta">
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <time datetime="{{$post->created_at}}">{{$post->created_at}}</time>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-commenting-o"></i>
                                                        No Comments
                                                    </li>
                                                </ul>
                                            </header>
                                            <div class="post-content">
                                                <div class="post-desc clearfix">
                                                    <p>{{$post->details}}</p>
                                                    <a href="../news/{{$post->id}}" class="btn btn-md btn-minimal">Read More</a>
                                            </div>
                                        </div></article>
                                    </div>
                                    @endforeach
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="sidebar sidebar-right col-md-3">
                <div id="search-2" class="widget widget_search">
                    <form name="search" method="get" id="searchform" class="searchform" action="search.php">
                        <div>
                            <label class="screen-reader-text" for="s">Search for:</label>
                            <input type="text" value="" name="searchtitle" id="s" placeholder="Search...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
                <div id="recent-posts-2" class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
                        @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <li>
                                <a href="">{{$post->title}}</a>
                            </li>
                        @endforeach

                        @endif
                    </ul>
                </div>
						<div id="recent-comments-2" class="widget widget_recent_comments">
						    <h3 class="widget-title">Recent Comments</h3>
						    <ul id="recentcomments">
    						    <li class="recentcomments">
    						        <span class="comment-author-link">admin</span> on
    						        <a href="../product/the-process/index.html#comment-66">The process</a>
    						    </li>
    						    <li class="recentcomments">
    						        <span class="comment-author-link">admin</span> on
    						            <a href="../product/quick-guide/index.html#comment-67">Quick guide</a>
    						    </li>
						    </ul>
					    </div>
					    <div id="archives-2" class="widget widget_archive">
					    <h3 class="widget-title">Archives</h3>		<ul>
			<li><a href="../2016/01/index.html">January 2016</a></li>
		</ul>
		</div><div id="categories-2" class="widget widget_categories"><h3 class="widget-title">Categories</h3>		<ul>

		</ul>
</div>

</aside>
	</div><!-- end .row -->
        <div class="row">
        	<div class=" col-md-12"></div></div>
									</div>
@endsection
