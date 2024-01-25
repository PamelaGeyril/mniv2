@include('layouts.includes.header')


      <div  id="particles-js" class = "particles-js-canvas-el data-compiling" style="background-image: url('{{ asset('img/css.jpg') }}');">
                <div class = "mni-system">
                         <div class = "container"> 
                              <div class = "row">
                                <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 mnisystem" >
                                       <img src="{{ asset('img/mni-logo.png') }}" alt="mni" class="img-fluid" />
                                 </div>
                                   <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 openlooklogo">
                                      <img src="{{ asset('img/open-look-logo-white.png') }}" alt="logo" class = "imageRotateHorizontal img-fluid"/>

   						                        <a href = "#" id = "logout" >Logout <i class="fas fa-sign-out-alt"></i></a>
                                   </div>
                              </div>
                         
                        </div>
                     </div>
        	 <div class = "container data-container">
            		<div class = "row">
            			<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 data-space">
                    @auth
                    <div class="agent-name"><b>Agent Name:</b> {{ auth()->user()->name }}</div>
                    <div class="agent-id"><b>Agent ID:</b> {{ auth()->user()->agent_id }}</div>
                @endauth
	            	    <div class = "agent"><b>Date:</b> {{ now()->format('Y/m/d') }} </div>
            		  </div>
            			<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 data-space">
                    <div class = "width-100"></div>   
                  </div>
            			<div class = "startcall">
                   <div class="col-xs-12 button-holder">
                      <div class="ajax-button">
                        <div class="fa fa-check done"></div>
                        <div class="fa fa-close failed"></div>
                        <input id="startcall" class="submit" type="button" value="Start Call" />
                      </div>
                    </div>
             			<img src = "{{ asset('img/call.gif') }}" class = "gifcall"/>
             			</div>
               		</div>
            	</div>
         </div>
     

     
        <footer class="footer-content">
      <p>Allrights reserved © {{ now()->format('Y') }} - <a href = "https://open-look.com/">open-look.com</a></p>
   </footer>