<?php include "includes/header.php"?>
        <section>
            <style>
            #listol{
               padding-left: 40px;
              margin-top: 1em;
              margin-bottom: 1em;    
      
             }
              #listul{
               padding-left: 30px;
                  margin-top: 1em;
                  margin-bottom: 1em;

             }    
            </style>
            
             <p>Flexbox is a layout model that allows elements to align and distribute space within rows or columns. Items expand to fill available free space or shrink to prevent overflow. (vkweb) </p>


<h2>Why Flexbox? (vkweb)</h2>
<p>For a long time, the float and positioning CSS layout approach was very popular and broadly adopted by popular grid frameworks. These tools are fine, and they work, but in some ways, they are also rather limiting and frustrating. Flexbox presents a series of benefits that are either difficult or impossible to achieve with such tools:</p>
            <ul id="listul"> <li>Vertically align flex items inside its parent.</li>
                 <li>All the children take up an equal amount of the available space. </li>
                 <li>All items will stretch along the cross axis to fill its full size even if they contain a different amount of content.</li>
            </ul>


<h3>The browser support for the latest flexbox specification is: (Can I use)</h3>

        
<ul id="listul">
    <li >Chrome 29+  </li> 
    <li>Firefox 28+</li>
    <li>Internet Explorer 11+ </li>
    <li>Opera 17+ </li>
    <li>Safari 6.1+ (prefixed with -webkit-) .</li>
    <li>Android 4.4+ </li>
    <li>iOS 7.1+ (prefixed with -webkit-)</li>
</ul>
            
<h2>How to use a CSS flexbox: (Coyier )</h2>    
    <p> To start using the Flexbox model, all you need to do is first define a flex-container. We do this by setting display: flex or display: inline-flex for the inline variation. 
There are two vital keywords we have to know to understand what lies ahead:</p>    
    <ul id="listul">
        <li>Flex container: The parent element we’ve set display: flex on.</li>
        <li>Flex items: The children elements within a Flex container.</li>
    </ul>   
<h3>The Flex Container Properties:</h3>
    <ul id="listul">
        <li>Flex-direction: The Flex-direction property controls the direction in which the flex-items are laid along the main axis. It can take four values: </li>
        <ol id="listol">
            <li>Row (default): left to right.</li>
            <li>Row-reverse: Right to left.</li>
            <li>Column: Same as row but top to bottom.</li>
            <li>Column-reverse: Same as row-reverse but bottom to top.</li>
        </ol>
        <li> By default, the flex container adapts to fit all children, even if the browser needs to be scrolled horizontally. We can change that and allow the items to wrap as needed with this property. Flex-wrap takes three values: </li>
        <ol id="listol">
            <li>Nowrap (default): all flex items will be on one line </li>
            <li>Wrap: flex items will wrap onto multiple lines, from top to bottom. </li>
            <li>Wrap-reverse: flex items will wrap onto multiple lines from bottom to top.</li>
        </ol>
        <li> The flex-flow is a shorthand property which takes flex-direction and Flex-wrap values. The default value is row nowrap.</li>
        <li> The justify-content property defines how flex items are laid out on the main axis. Here's the breakdown of what's possible:</li>
        <ol id="listol">
                <li>Flex-start (default): items are packed toward the start of the flex-direction. </li>
                <li>Flex-end: items are packed toward the end of the flex-direction. </li>
                <li>Start: items are packed toward the start of the writing-mode direction.</li>
                <li> End: items are packed toward the end of the writing-mode direction. </li>
                <li>Left: items are packed toward the left edge of the container unless that doesn’t make sense with the flex-direction, then it behaves like start.  </li>
                <li>Right: items are packed toward the right edge of the container unless that doesn’t make sense with the flex-direction, then it behaves like start. </li>
                <li>Center: it centers the flex items along the main axis. </li>
                <li>Space-between: items are evenly distributed in the line; the first item is on the start line, the last item on the end line </li>
                <li>Space-around: items are evenly distributed in the line with equal space around them. </li>
                <li>Space-evenly: items are distributed so that the spacing between any two items (and the space to the edges) is equal.</li> 
         </ol>
             
            
            </ul>        
            
            
         </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h3>Works Cited</h3>
              <ul>
                  <li><p>vkweb. “Flexbox.” MDN Web Docs, 17 Oct. 2020,<a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox"> developer.mozilla.org.</a></p></li>
                  <li><p>Can I Use... Support Tables for HTML5, CSS3, Etc,<a href="https://caniuse.com/flexbox">caniuse.com/flexbox</a></p></li>
                  <li><p>Coyier, Chris. “A Complete Guide to Flexbox: CSS-Tricks.” CSS, 22 Oct. 2020,  <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox//">css-tricks.com/a-guide-to-flexbox</a></p></li>
             </ul>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
 <?php include "includes/footer.php"?>  