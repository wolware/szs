@extends('layouts.app')

@section('content')


  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


<!-- Header
    ================================================== -->
  
    <!-- Header / End -->
    
    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">
    
          <a href="#" class="push-rekreacija btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-futbol-o"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Rekreacija</h6>
            </a>

            <a href="#" class="push-aplikacije btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-file"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Aplikacije</h6>
            </a>

            <a href="#" class="push-turizam btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-bus"></i>
              </div>
              <h6 class="btn-social-counter__title">Sportski turizam</h6>
            </a>
    
        </div>
        <a href="#" class="pushy-panel__back-btn"></a>
      </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->
   
      <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title"><i class="fa fa-upload fa-2x"></i></h1>
            <h1 class="page-heading__title">Outbox</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Poslane poruke</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Team Pages Filter -->
        <nav class="content-filter">
          <div class="container">
            <a href="#" class="content-filter__toggle"></a>
            <ul class="content-filter__list">
              <li class="content-filter__item "><a href="inbox.php" class="content-filter__link"><i class="fa fa-download"></i><small>Primljene</small>Poruke</a></li>
              <li class="content-filter__item content-filter__item--active"><a href="outbox.php" class="content-filter__link"><i class="fa fa-upload"></i><small>Poslane</small>Poruke</a></li>
              <li class="content-filter__item "><a href="important.php" class="content-filter__link"><i class="fa fa-bookmark"></i><small>Bitne</small>Poruke</a></li>
            </ul>
          </div>
        </nav>
        <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
      <div class="container">

        <div class="row postavke-red">
		<!-- Inbox list -->
        <div class="post-comments card card--lg messages-start-col">
              <div class="post-comments__content card__content">
            
                <ul class="comments">
                  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
				  <li class="comments__item">
                    <div class="comments__inner">
                      <header class="comment__header">
                        <div class="comment__author">
                          <figure class="comment__author-avatar">
                            <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                          </figure>
                          <div class="comment__author-info">
                            <a href="#"><h5 class="comment__author-name">Tarik2012</h5></a>
                            <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time>
                          </div>
                        </div>
                        <div class="comment__reply">
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-bookmark"></i></a>
						  <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
                        </div>
                      </header>
                      <div class="comment__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </div>
                    </div>
                  </li>
				  
                </ul>
            
                <!-- Inbox Pagination -->
                <nav aria-label="Comments Pavigation" class="post__comments-pagination">
                  <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">16</a></li>
                  </ul>
                </nav>
                <!-- Inbox Pagination / End -->
            
              </div>
            </div>
		<!-- Inbox list / End -->

        </div>
      </div>
    </div>


@endsection