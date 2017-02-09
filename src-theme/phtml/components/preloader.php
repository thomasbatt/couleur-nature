<style>	
	header, #slider-carouselFade, #page, #wrapper-content, footer{
		display: none;
		opacity: 0;
	}
	.preloader{
		display: block ;
		opacity: 1 ;
		z-index: 0;
		position : fixed;
	    width: 100%;
	    height: 100%;
	}
	.preloader svg{
		position: absolute;
	  	width: 100px;
	  	height: 100px;
		left: 50%;
		top: 50%;
	  	margin: 20px;
	  	display:inline-block;
		transform: translateX(-65px);
	}
</style>
<div class="preloader">
	<svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
	    <g fill="none" fill-rule="evenodd">
	        <g transform="translate(2 1)" stroke="rgba(9, 255, 3,0.5)" stroke-width="1.5">
	            <circle cx="42.601" cy="11.462" r="5" fill-opacity="1" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="1;0;0;0;0;0;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="49.063" cy="27.063" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;1;0;0;0;0;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="42.601" cy="42.663" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;1;0;0;0;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="27" cy="49.125" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;0;1;0;0;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="11.399" cy="42.663" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;0;0;1;0;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="4.938" cy="27.063" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;0;0;0;1;0;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="11.399" cy="11.462" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;0;0;0;0;1;0" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	            <circle cx="27" cy="5" r="5" fill-opacity="0" fill="rgba(9, 255, 3,0.5)">
	                <animate attributeName="fill-opacity"
	                     begin="0s" dur="1.3s"
	                     values="0;0;0;0;0;0;0;1" calcMode="linear"
	                     repeatCount="indefinite" />
	            </circle>
	        </g>
	    </g>
	</svg>
</div>