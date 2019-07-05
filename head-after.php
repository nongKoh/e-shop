<!-- Account -->
<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">ชื่อ user <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="">Logout</a>
							
							<!-- องค์ประกอบของ Signin -->
							<div id="modalSignin" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">สมาชิกเข้าสู่ระบบ</h5>
											<button class="close" data-dismiss="modal">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label for="login">Login:</label>
													<input  type="text" id="login"
															class="form-control">
												</div>
												<div class="form-group">
													<label for="pswd">Password:</label>
													<input  type="password" id="pswd" 
														class="form-control">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary">เข้าสู่ระบบ</button>
											<button class="btn btn-warning">ลืมรหัสผ่าน</button>
											<button class="btn btn-info">สมัครสมาชิก</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /องค์ประกอบของ Signin -->
							<!-- องค์ประกอบของ Register -->
							<div id="modalRegister" class="modal fade">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
								<h3 class="modal-title" >สมัครสมาชิก</h3>
								<button class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<form>
								<div class="form-group">
								<label for="login">Email:</label>
								<input  type="text" id="login" placeholder="example@hotmail.com" 
									class="form-control">
								</div>
								<div class="form-group">
								<label for="pswd">Password:</label>
								<input  type="password" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="name">Name:</label>
									<input  type="text" id="name" placeholder="Prayut" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="lastname">Lastname</label> 
									<input  type="text" id="lastname" placeholder="Chan-O-cha" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="tel">Tel:</label>
									<input  type="tel" id="tel" placeholder="08x-xxx-xxxx" 
									class="form-control">
								</div>
								
								</form>
								</div>
								<div class="modal-footer">
								
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								</div>
								</div>
							</div>
							</div>
						 <!-- /องค์ประกอบของ Register -->
						 <!-- องค์ประกอบของ Register Manager-->
						<div id="modalRegistermanager" class="modal fade">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
								<h3 class="modal-title" >สมัครสมาชิก</h3>
								<button class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<form>
								<div class="form-group">
								<label for="user-name">Username:</label>
								<input  type="test" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group">
								<label for="pswd">Password:</label>
								<input  type="password" id="pswd" placeholder="Password" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="re-pswd">Confirm Password:</label> 
									<input  type="password" id="re-pswd" placeholder="Re-Password" 
									class="form-control">
								</div>
								<div class="form-group">
								<label for="email-com">Email:</label>
								<input  type="text" id="login" placeholder="example@hotmail.com" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="name">Name:</label>
									<input  type="text" id="name" placeholder="Prayut" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="lastname">Lastname:</label> 
									<input  type="text" id="lastname" placeholder="Chan-O-cha" 
									class="form-control">
								</div>
								<div class="form-group">
									<label for="tel">Tel:</label>
									<input  type="tel" id="tel" placeholder="08x-xxx-xxxx" 
									class="form-control">
								</div>
								
								</form>
								</div>
								<div class="modal-footer">
								
								<button class="btn btn-primary">ตกลง</button>
								<button class="btn btn-link">ยกเลิก</button>
								</div>
								</div>
							</div>
							</div>
 						<!-- /องค์ประกอบของ Register Manager -->	
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
                        <!-- /Account -->
                        
                        <!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->
