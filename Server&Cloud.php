<?php
include "header.php";
?>

<main>
        <section class="fontbox managed">
            <div class=" Blue-ShortDotted-Image wow slideInLeft">
				<img src="images/dot.png">
			</div>
              <div class="rightimages wow rightAnimate">
                    <!-- <img src="images/ts.png"> -->
                </div>
            <div class="container">
                <div class="row">
                    <div class=" col-md-6 cloudSolution wow slideInLeft">
                        <h1>
                        <span class="Boldfont">Managed Public Cloud <span class="Boldfont_Blue">Solutions for your Business</span></span>
                    </h1>
                        <p>Managed Public Cloud Hosting offers scalable and elastic cloud-based IT solutions to external customers by deploying shared physical resources accessible over public networks such as the Internet. Users can have easy access to IT resources with reduced prices to manage their ongoing infrastructure and data center facilities. This helps them innovate, transform and accelerate their business models as per market demands. Along with industry-standard security, compliance, monitoring, and management, we offer consolidated and simplified billing, maximal automation and application lifecycle management for your enterprise through our comprehensive public cloud services. With a demonstrated technical proficiency and proven customer success.</p>
                    </div>
					<div class="col-md-6 FormSection wow rightAnimate">
						<form action="https://formsubmit.co/karunyagroupmp@gmail.com" method="POST"   onsubmit="return validation()"> 
                         <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_subject" value="Hey Karunya Applied Science..!!!">
                        <?php
                        if (isset($_SESSION['name_err'])) {
                            echo $_SESSION['name_err'];
                            unset($_SESSION['name_err']);
                        }
                        if (isset($_SESSION['email_err'])) {
                            echo $_SESSION['email_err'];
                            unset($_SESSION['email_err']);
                        }
                        if (isset($_SESSION['phone_err'])) {
                            echo $_SESSION['phone_err'];
                            unset($_SESSION['phone_err']);
                        }
                        if (isset($_SESSION['description_err'])) {
                            echo $_SESSION['description_err'];
                            unset($_SESSION['description_err']);
                        }
                        ?>
                        <span id="v_name" style="color: red;"></span>
                        <span id="v_email" style="color: red;"></span>
                        <span id="v_phoneno" style="color: red;"></span>
                        <span id="v_description" style="color: red;"></span>
                        <div class="forminput">
                            <input type="text" name="Name" id="name" placeholder="YOUR NAME" />
                            <input type="email" name="Email" id="email" placeholder="EMAIL ADDRESS" />
                            <input type="hidden" name="_next" value="https://karunyagroup.com">
                        </div>
                        <div class="forminput namediv">
                            <input type="text" name="Phone Number" id="phoneno" placeholder="MOBILE NUMBER" />
                        </div>
                        <div class="issuedv">
                            <textarea placeholder="YOUR MESSAGE" name="Description" id="description"></textarea>
                        </div>
                        <!-- <div class="cust-re">
                            <div class="g-recaptcha brochure__form__captcha" data-sitekey="6Le_Xi0aAAAAAMBJEDwelKBFmXQyDyFMk57X-nDH"style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;">
                            </div>
                        </div> -->
                        <button type="submit" class="bannerbtn btnCol btnWhite mt-2">Submit</button>
                        <div id="contact-message"></div>  
                    </form>
					</div>

                </div>
            </div>
        </section>
       <!--  <section class="keyFeature fontbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 keyFeature text-center">
                        <h2><span class="Boldfont">
                   Key Features of<span class="Boldfont_Blue"> Public Cloud Servers Hosting</span></span>
                </h2>
                        <p> <b> Scalability</b> Public cloud computing ensures on-demand availability of resources; thanks to an array of shared physical resources. You can also scale the operations to accommodate more applications, and run them seamlessly without any service interruptions.</p>
                        <p> <b> Cost-Effectiveness</b> Public cloud hosting services allow users to combine greater levels of resources to cater to larger operating needs. The centralized management of the underlying resources is shared across each of the subsequent services, allowing customers to save big bucks on physical infrastructure.</p>
                        <p> <b>Utility costing</b> Deploying public cloud services allows you to employ a pay-per-use charging model for your customers. They are able to access the resources as per requirement, and then pay for what they utilized, avoiding any waste of capacity.</p>
                        <p> <b>Reliability</b> Public cloud server model involves numerous servers and network topologies, incorporated into a single design. The model has redundant configurations that provide impeccable fault tolerance and failover capabilities. Even if a data center goes offline, there is no disruption in services.</p>
                        <p> <b>Flexibility</b> IaaS, PaaS and SaaS services deliver comprehensive IT-based solutions to both private and enterprise clients. Organizations and businesses also have the option to create hybrid clouds by integrating their public cloud services with private clouds.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="keyFeature fontbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 keyFeature wow leftAnimate">
                        <h2><span class="Boldfont">
							Key Features of<span class="Boldfont_Blue"> Public Cloud Servers Hosting</span></span>
						</h2>
						<ul class="ulImage">
							<li><b> Scalability</b> Public cloud computing ensures on-demand availability of resources; thanks to an array of shared physical resources. You can also scale the operations to accommodate more applications, and run them seamlessly without any service interruptions.</li>
							<li><b> Cost-Effectiveness</b> Public cloud hosting services allow users to combine greater levels of resources to cater to larger operating needs. The centralized management of the underlying resources is shared across each of the subsequent services, allowing customers to save big bucks on physical infrastructure.</li>
							<li><b>Utility costing</b> Deploying public cloud services allows you to employ a pay-per-use charging model for your customers. They are able to access the resources as per requirement, and then pay for what they utilized, avoiding any waste of capacity. </li>
							<li> <b>Reliability</b> Public cloud server model involves numerous servers and network topologies, incorporated into a single design. The model has redundant configurations that provide impeccable fault tolerance and failover capabilities. Even if a data center goes offline, there is no disruption in services.</li>
							<li><b>Flexibility</b> IaaS, PaaS and SaaS services deliver comprehensive IT-based solutions to both private and enterprise clients. Organizations and businesses also have the option to create hybrid clouds by integrating their public cloud services with private clouds. </li>


						</ul>
                    </div>
					<div class="col-md-5 BranchesIncludeImage wow rightAnimate">
						<img src="images/vps12.png" class="img-fluid ">

					</div>
                </div>
            </div>
        </section>
        <!--   <section class="fontbox">
            <div class="container">
                <div class="row">
                    <div class="cominSonn ">
                        <div class="lftComing col-6">
                            <h2>
                    <span class="Boldfont">Why Karunya Applied Science (OPC) Pvt Ltd for Public Cloud Hosting
                    Solutions?</span>
                </h2>
                            <p>We at Karunya Applied Science (OPC) Pvt Ltd plan, design and build public cloud computing solutions that reduce IT costs, streamline operations and accelerate time to market. With a comprehensive public cloud-focused</p>
                            <h6>Coming Soon</h6>
                        </div>
                        <div class="rtComing col-6">
                            <img src="images/forensics.gif">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="fontbox  whyTech">
            <div class="round-img wow fadeIn">
                <img src="images/round-design.png">
            </div>
            <div class="container">
                <div class="uperContent">
                    <div class="row">
                        <div class="col-md-12  solution text-center">
                            <h2>
                        <span class="Boldfont"><span class="Boldfont_Blue">Why Karunya Applied Science</span> for Public Cloud Hosting
                    Solutions?</span>
                    </h2>
                            <p>We at Karunya Applied Science (OPC) Pvt Ltd plan, design and build public cloud computing solutions that reduce IT costs, streamline operations and accelerate time to market. With a comprehensive public cloud-focused</p>
                            <div class=" middleText text-center">
                                <h6><b>
                            service portfolio and targeted methodologies and tools, we strategize roadmaps and provide the expertise to help you build, optimize and manage your cloud environment.</b>
                        </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  whytechList">
                        <h2>

                    <ul class="ulImage">
                        <li><b>Strategy</b> Architecture, Design, Deployment</li>
                        <li><b>OS Management</b> Security, Performance, Reliability</li>
                        <li><b> Secure Hassle</b> Free Migration </li>
                        <li><b>Support</b> 24x7x365 Technical Support</li>
                        <li><b> Uptime</b> 99.95% SLA for Public Network </li>
                        <li><b>Managed Services</b> With Subject Matter Experts to Monitor your Apps </li>

                    </ul>
                 </div>

                <div class="col-md-6 BranchesIncludeImage">
                     <img src="images/forensics.gif">

                </div>
            </div>

        </div>
    </section>
            <section class="fontbox  infraCloud">
                
        <div class="container">
            <div class="uperContent">
                <div class="row">
                     <div class="col-md-12  solution text-center">
                    <h2>
                        <span class="Boldfont">Our <span class="Boldfont_Blue">Expertise</span></span>
                    </h2>
                        <p>Karunya Applied Science (OPC) Pvt Ltd team has expertise in 3 leading cloud platforms – <b>AWS, Azure and Google Cloud along With Data Center technologies including VMware, Hyper-V, Open Stack.</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="cloudOffering">
                <div class="row">
                    <div class="col-md-6 innerContent ">
                        <h2>Karunya Applied Science (OPC) Pvt Ltd
                        <span class="Boldfont">Cloud Offerings </span>
                    </h2>
                        <ul class="ulImage">
                            <li>Cloud Consulting and Migration</li>
                            <li>Cloud Optimization & Security</li>
                            <li>Free Migration</li>
                            <li>24*7 Cloud Manage Service and Support</li>
                            <li>99.95% SLA for Public Network</li>
                            <li>Database Consulting</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="images/Support247.png">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="fontbox servicePartner">
            <div class="container">
                <div class="row">

                        <div class="partner col-sm-12 text-center">

                          <h2><span class="Boldfont">Our Public Cloud <span class="Boldfont_Blue">Services Partners </span></span></h2>
                            <ul>
                                <li><img src="images/amazon.png" alt=""></li>
                                <li><img src="images/microsoft.png" alt=""></li>
                                <li><img src="images/oreacle.png" alt=""></li>
                                <li><img src="images/googlecloud.png" alt=""></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        function validation(){
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var phoneno = document.getElementById('phoneno').value.trim();
            var description = document.getElementById('description').value.trim();

            if (name == "") {
                document.getElementById('v_name').innerHTML="Please enter name..!!<br>";
                return false;
            }
            if (!isNaN(name)) {
                document.getElementById('v_name').innerHTML="Name must contain alphabets only..!!<br>";
                return false;
            }
            if (email == "") {
                document.getElementById('v_email').innerHTML="Please enter email..!!<br>";
                return false;
            }
            if (phoneno == "") {
                document.getElementById('v_phoneno').innerHTML="Please enter phone..!!<br>";
                return false;
            }
            if (phoneno.length != 10) {
                document.getElementById('v_phoneno').innerHTML="Phone length must be 10..!!<br>";
                return false;
            }
            if (isNaN(phoneno)) {
                document.getElementById('v_phoneno').innerHTML="Phone must contain numbers only..!!<br>";
                return false;
            }
            if (description == "") {
                document.getElementById('v_description').innerHTML="Please enter message..!!<br>";
                return false;
            }
        }
    </script>

<?php
include "footer.php";
?>