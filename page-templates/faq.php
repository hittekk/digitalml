<?php
/* Template Name: FAQ
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<div class="page-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/faq-banner.jpg) no-repeat top center; background-size: cover">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<table>
					<tr>
					  <td class="align-middle">
					  	<h1>FAQ</h1>
			Welcome to our FAQ page. Here you will find a collection of questions from customers and API enthusiasts alike.

					  </td>
					  
					</tr>
				</table>
			</div>
			<div class="col-md-5 hidden-xs">
				<table width="100%">
					<tr>
					  <td class="align-middle" align="center">
					  	<img src="<?php echo get_template_directory_uri(); ?>/images/faq-banner-img.png" class="img-responsive">
					  </td>
					</tr>
				</table>
			
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		
		
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false">Why an Information Model?</button>
			<div class="faq-answer collapse" id="faq1">
				<div class="faq-answer-inner">
				Our customers know they've arrived when they start building an armada of API Products across regions and lines of business, with speed <i>and</i> control -- and this is largely attributed to ignite's domain-based information model.
<br><br>
Unlike the traditional canonical model, which can become a bottleneck for agile teams, our domain-based information model allows you to keep order within a bounded context. The information model also pushes updates across to the entire system (even to live products), while keeping track of versioning and change management. 
<br><br>
Your domain-based information model maps associated terminology together, so you can quickly adapt to services and technology in new regions. ignite allows you to tie your information model to the very resources you're building with, making for a speedy lifecycle with impeccable record-keeping.

				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="false">What is an API Product?</button>
			<div class="faq-answer collapse" id="faq2">
				<div class="faq-answer-inner">
			API Products are APIs (Application Program Interfaces) treated as Products, meaning they are consistent, appealing, reliable, world class, and accounted for -- they often even have a Digital Product Owner to manage them. 
<br><br>
ignite helps you manage your APIs like products with the well-documented design of every project, through change management, version control, details, specifications, metadata, and policies captured early on so you have visibility, ownership, speed, and control.
<br><br>
The key to digital transformation, growth, and IT modernization, API Products unlock the ability to expose internal data and integrate with third-parties to become locally relevant to your users. When business and IT collaborate over your API Portfolio of core capability building blocks and third-party APIs, innovation is boundless, and scalability is a given.
				</div>
			</div>
			
          <button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="false">What does an API Product do?</button>
			<div class="faq-answer collapse" id="faq3">
				<div class="faq-answer-inner">
			An API Product provides a single business process or digital experience to a customer (internal, external, or third-party). These simplified calls are the basis of the five areas supporting your digital strategy: 1) Information Systems, 2) Customer Experience, 3) Data & Analytics, 4) IoT, and 5) Developer Ecosystems.
				</div>
			</div>
          
          <button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="false">What are the elements of an API Product?</button>
			<div class="faq-answer collapse" id="faq4">
				<div class="faq-answer-inner">
		In ignite, an API Product begins as a grouping of Business Capability Building Blocks, third-party APIs and existing API Products. This grouping is packaged together with other elements during the Plan and Design stages, where so many details are captured that automate Build, and then deployed in the wild at Runtime. 
<br><br>
A complete API Product consists of an API grouping, definition, specification, flow, policy, SLD, NFRs, and mappings to your information model. With ignite, any other metadata you wish to add can be included as well.

				</div>
			</div>
          
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false">How do you fit in with API Management and API Gateway environments?</button>
			<div class="faq-answer collapse" id="faq5">
				<div class="faq-answer-inner">
				We are in the API Management space, but with a unique focus on helping enterprises build and manage well-documented API Products, so we consider our offering API Product Management. 
<br><br>
While many SMBs might not have the faculties to build more than one create-and-run API Product at a time, our platform is quite useful to those at the enterprise level who need to be able to organize an extensive list of microservices and APIs to scale their products for digital experiences, lines of business, and regions. 
<br><br>
As for how we fit in with API Gateways, our offering covers the full-range lifecycle, so you can use ignite for runtime, or to test and deploy to your existing API management/runtime distributors, then back into ignite to view the dashboard of all of your environments, including expected versus actual performance.
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false">What's an API Portfolio?</button>
			<div class="faq-answer collapse" id="faq6">
				<div class="faq-answer-inner">
				An API Portfolio is a searchable holistic repository of your company’s existing digital assets; an entire catalog of building blocks ready to design, connect, plug in, and go. This includes everything from external-facing digital products to the atomic level of resource methods, which are aligned to stakeholder systems. 
<br><br>
Your API portfolio shows the strengths and gaps of your current digital state, brings business & IT together, and acts as an innovation lab for ideation. Thus, we believe it is an essential key to digital market leadership.
                  <br><br>
                  <br>For more info, visit our blog on <a href="http://blogdigitalml.wpengine.com/uncover-your-enterprise-portfolio/">Uncovering Your Enterprise API Portfolio</a>
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq7" aria-expanded="false">What is the difference between a Business Capability API and System API?</button>
			<div class="faq-answer collapse" id="faq7">
				<div class="faq-answer-inner">
				Within ignite, a Business Capability API is an API described in business terms, built using a domain-based Information Model to support your core business capabilities across regions and lines of business. It avoids using terminology and payloads specific to the third-party software you use, so you're instead focused on business aims, rather than being tied to underlying infrastructure. In your ignite API Portfolio, you will see these listed as <i>Business Capability Building Blocks</i>. 
<br><br>
System APIs, also known as CRUD APIs (Create, Read, Update, Delete), on the other hand, often <i>do</i> interact with third-party software, so it is important to use terminology/payloads specific to the language of your third-party interactions. We refer to these as <i>API Products</i> in your ignite API Portfolio.

				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false">Why do I need a design-first approach?</button>
			<div class="faq-answer collapse" id="faq8">
				<div class="faq-answer-inner">
				Everyone has a different API Strategy. For smaller companies with limited resources and less to manage, it makes sense to have a point-to-point API strategy. At the enterprise level, however – a design-first microservices approach must be adopted. To become a market leader, we believe a holistic API Portfolio full of abstracted capabilities is the only way to keep track of your data and move forward.
<br><br>
Design-first is far more agile in that anything built is modular and easily adaptable, in contrast to end-to-end projects, which are not modular and much more time-intensive; meaning less cost-effective to fix. 
<br><br>For more info, visit our blog on <a href="http://blog.digitalml.com/heard-at-the-forum-design-matters-to-enabling-apis-and-big-data-to-succeed-in-large-enterprises/">Why Design Matters</a>
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="false">Can I bring in existing services, models, and APIs?</button>
			<div class="faq-answer collapse" id="faq9">
				<div class="faq-answer-inner">
				Please do! You built it -- why should you have to throw it away? Your existing services, models, and APIs are what made your company great. 
<br><br>
Our Fast Track program helps you upload legacy systems, data, and mappings, etc., trim everything down to its fittest state, and give you a powerful high-level view of what you can use, what you need, and where to start building out the gaps.
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq10" aria-expanded="false">How does digitalML help our API strategy?</button>
			<div class="faq-answer collapse" id="faq10">
				<div class="faq-answer-inner">
				We provide a platform for your Plan, Design, Build, and Run stages of the Product Management Lifecycle. So, we support your API strategy along every step of the way.
<br><br>
Our Fast Track Professional Services offering walks customers through the steps of Strategic Alignment, Quick Wins, and Digital Market Leadership.
<br><br>For more info, visit our page on <a href="https://www.digitalml.com/fast_track/">ignite Fast Track</a>
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="false">What comes first, the microservice or the API?</button>
			<div class="faq-answer collapse" id="faq11">
				<div class="faq-answer-inner">
				There's a lot of conversation happening right now about which comes first, or whether they are the same thing -- we see often the terms being used interchangeably in the field. 
<br><br>
However, we tend to believe that in an actual use case a microservice is typically a derivative of an API Product or Business Capability API -- just a simplified call needed from an existing API or service. Bottom line -- whatever you call them, we are built to support microservices architecture <i>and</i> API Product Management, so you're in good hands, either way.
				</div>
			</div>
			
			<button type="button" class="btn btn-info btn-faq collapsed" data-toggle="collapse" data-target="#faq12" aria-expanded="false">What does ignite export?</button>
			<div class="faq-answer collapse" id="faq12">
				<div class="faq-answer-inner">
				We import your existing services, break them up into reusable building blocks that can plug in and go, and export code templates in any programming language. Along the way, we keep impeccable track of change management and version control, and ultimately we provide a platform where business and IT unite over one API Portfolio to innovate and build incredibly fast. So, in a way, we export... scale.
				</div>
			</div>
			
		</div>
	</div>
</div>





<?php get_footer(); ?>

