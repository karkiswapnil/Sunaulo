<div class="header_top_bar_container  clearfix style_2 border">
			
				<div class="header_top_bar">
					<form class="search">
						<input type="text" name="s" placeholder="Search..." value="Search..." class="search_input hint">
						<input type="submit" class="search_submit" value="">
						<input type="hidden" name="page" value="search">
					</form>
					
					<ul class="social_icons clearfix dark">
					<li style="padding-top: 0px;">
						@include('partials._mobilenav')
						</li>
						<li>
							<a target="_blank" href="" class="social_icon facebook" title="facebook">
								&nbsp;
							</a>
						</li>
						<li>
							<a target="_blank" href="" class="social_icon twitter" title="twitter">
								&nbsp;
							</a>
						</li>
						
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">LATEST</li>
							
							<li class="posts">
								<ul class="latest_news_scrolling_list">
									@foreach($articles as $article)
									<li>
										<a href="{{ route('view',$article->id) }}" title="{{$article->title}}">{{$article->title}}</a>
									</li>
									@endforeach
								</ul>
							</li>
							<li class="date">
				
						</li>
						</ul>
					</div>
				</div>
			</div>
