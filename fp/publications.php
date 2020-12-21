<?php include "includes/header.php"?>
 

 <div id="main">
      	<div id="biography" class="page home" data-pos="home">    	
    	<div id="publications" class="page">
    <div class="page-container">



        <div class="pagecontents">
        
        <div class="pageheader">
            <div class="headercontent">
                <div class="section-container">
                    
                    <h2 class="title">Publications</h2>
                    <div class="row">
                        <div class="col-md-12">
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

            <div class="section color-1" id="filters">
                <div class="section-container">
                    <div class="row">                        
                        <div class="col-md-3">
                            <h3>Filter by type:</h3>
                        </div>
                        <div class="col-md-6">
                            <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                                <option class="filter" value="all" selected>All types</option>  -->
                                <!-- <option class="filter" value="jpaper">Jounal Papers</option>  -->
                                <option class="filter" value="cpaper">Conference Papers</option>
                                <option class="filter" value="arxiv">arXiv Papers</option>                                
                                <!-- <option class="filter" value="book">Books</option>  -->
                                <!-- <option class="filter" value="thesis">Thesis</option>  -->
            					<!-- <option class="filter" value="poster">Poster Papers</option>  -->
                                <!-- <option class="filter" value="media">Media Articles</option>  -->
                                <!-- <option class="filter" value="report">Reports</option> -->
                                <!-- <option class="filter" value="tpaper">Technical Papers</option> -->
                            </select>
                        </div>                        
                        <div class="col-md-3" id="sort">
                            <span>Sort by year:</span>
                            <div class="btn-group pull-right"> 

                                <button type="button" data-sort="data-year" data-order="desc" class="sort btn btn-default"><i class="icon-sort-by-order"></i></button>
                                <button type="button" data-sort="data-year" data-order="asc" class="sort btn btn-default"><i class="icon-sort-by-order-alt"></i></button>

                            </div>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="section color-2" id="pub-grid">
                <div class="section-container">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pitems">
                            



                            
<!-- GATE-->		

<div class="item mix arxiv" data-year="2019">
<div class="pubmain">
<div class="pubassets">

<a href="#" class="pubcollapse">
<i class="icon-plus"></i>
</a>

<a href="https://arxiv.org/abs/1905.10715" class="tooltips" title="arXiv" target="_blank">
<i class="icon-external-link"></i>
</a>

<a href="publications/2019/GATE.pdf" class="tooltips" title="Download" target="_blank">
<i class="icon-cloud-download"></i>
</a>

<a href="https://github.com/amin-salehi/GATE" class="tooltips" title="GitHub" target="_blank">
<i class="icon-code-fork"></i>
</a>

<!-- <a href="publications/2018/bib/GATE.bib" class="tooltips" title="Bibtex" target="_blank">
<i class="icon-book"></i>
</a> -->

</div>
<h4 class="pubtitle">Graph Attention Auto-Encoders</h4>
<div class="pubauthor"><strong>Amin Salehi</strong>, Hasan Davulcu </div>
<div class="pubcite"><span class="label label-warning">arXiv Papers</span>arXiv:1905.10715</div>

</div>
<div class="pubdetails">
<h4>Abstract</h4>
<p>
Auto-encoders have emerged as a successful framework for unsupervised learning. However, conventional auto-encoders are incapable of utilizing explicit relations in structured data. To take advantage of relations in graph-structured data, several graph auto-encoders have recently been proposed, but they neglect to reconstruct either the graph structure or node attributes. In this paper, we present the graph attention auto-encoder (GATE), a neural network architecture for unsupervised representation learning on graph-structured data. Our architecture is able to reconstruct graph-structured inputs, including both node attributes and the graph structure, through stacked encoder/decoder layers equipped with self-attention mechanisms. In the encoder, by considering node attributes as initial node representations, each layer generates new representations of nodes by attending over their neighbors' representations. In the decoder, we attempt to reverse the encoding process to reconstruct node attributes. Moreover, node representations are regularized to reconstruct the graph structure. Our proposed architecture does not need to know the graph structure upfront, and thus it can be applied to inductive learning. Our experiments demonstrate competitive performance on several node classification benchmark datasets for transductive and inductive tasks, even exceeding the performance of supervised learning baselines in most cases.
</p>
</div>
</div>

<!-- End of One Item -->  


<!-- ASONAM 18-->		

<div class="item mix cpaper" data-year="2018">
<div class="pubmain">
<div class="pubassets">

<a href="#" class="pubcollapse">
<i class="icon-plus"></i>
</a>

<a href="https://arxiv.org/abs/1807.03617" class="tooltips" title="arXiv" target="_blank">
<i class="icon-external-link"></i>
</a>

<a href="publications/2018/DAAC.pdf" class="tooltips" title="Download" target="_blank">
<i class="icon-cloud-download"></i>
</a>

<a href="https://github.com/amin-salehi/DAAC" class="tooltips" title="GitHub" target="_blank">
<i class="icon-code-fork"></i>
</a>

<a href="publications/2018/bib/DAAC.bib" class="tooltips" title="Bibtex" target="_blank">
<i class="icon-book"></i>
</a>

</div>
ASONAM 2018 (Acceptance Rate 15%)
<h4 class="pubtitle">Detecting Antagonistic and Allied Communities on Social Media</h4>
<div class="pubauthor"><strong>Amin Salehi</strong>, Hasan Davulcu </div>
<div class="pubcite"><span class="label label-warning">Conference Papers</span>IEEE/ACM International Conference on Advances in Social Networks Analysis and Mining, Barcelona, Spain, 2018.</div>

</div>
<div class="pubdetails">
<h4>Abstract</h4>
<p>Community detection on social media has attracted considerable attention for many years. However, existing methods do not reveal the relations between communities. Communities can form alliances or engage in antagonisms due to various factors, e.g., shared or conflicting goals and values. Uncovering such relations can provide better insights to understand communities and the structure of social media. According to social science findings, the attitudes that members from different communities express towards each other are largely shaped by their community membership. Hence, we hypothesize that inter-community attitudes expressed among users in social media have the potential to reflect their inter-community relations. Therefore, we first validate this hypothesis in the context of social media. Then, inspired by the hypothesis, we develop a framework to detect communities and their relations by jointly modeling users' attitudes and social interactions. We present experimental results using three real-world social media datasets to demonstrate the efficacy of our framework.</p>
</div>
</div>

<!-- End of One Item -->                            
                            
                            





<!-- Hypertext 18-->		

<div class="item mix cpaper" data-year="2018">
<div class="pubmain">
<div class="pubassets">

<a href="#" class="pubcollapse">
<i class="icon-plus"></i>
</a>

<a href="https://arxiv.org/abs/1805.04191" class="tooltips" title="arXiv" target="_blank">
<i class="icon-external-link"></i>
</a>

<a href="publications/2018/GSNMF.pdf" class="tooltips" title="Download" target="_blank">
<i class="icon-cloud-download"></i>
</a>

<a href="https://github.com/amin-salehi/GSNMF" class="tooltips" title="GitHub" target="_blank">
<i class="icon-code-fork"></i>
</a>

<a href="publications/2018/bib/GSNMF.bib" class="tooltips" title="Bibtex" target="_blank">
<i class="icon-book"></i>
</a>

</div>
Hypertext 2018 (Acceptance Rate 27%)
<h4 class="pubtitle">Sentiment-driven Community Profiling and Detection on Social Media</h4>
<div class="pubauthor"><strong>Amin Salehi</strong>, Mert Ozer, Hasan Davulcu </div>
<div class="pubcite"><span class="label label-warning">Conference Papers</span>ACM Conference on Hypertext and Social Media, Baltimore, Maryland, 2018.</div>

</div>
<div class="pubdetails">
<h4>Abstract</h4>
<p>Web 2.0 helps to expand the range and depth of conversation on many issues and facilitates the formation of online communities. Online communities draw various individuals together based on their common opinions on a core set of issues. Most existing community detection methods merely focus on discovering communities without providing any insight regarding the collective opinions of community members and the motives behind the formation of communities. Several efforts have been made to tackle this problem by presenting a set of keywords as a community profile. However, they neglect the positions of community members towards keywords, which play an important role for understanding communities in the highly polarized atmosphere of social media. To this end, we present a sentiment-driven community profiling and detection framework which aims to provide community profiles presenting positive and negative collective opinions of community members separately. With this regard, our framework initially extracts key expressions in users' messages as representative of issues and then identifies users' positive/negative attitudes towards these key expressions. Next, it uncovers a low-dimensional latent space in order to cluster users according to their opinions and social interactions (i.e., retweets). We demonstrate the effectiveness of our framework through quantitative and qualitative evaluations.</p>
</div>
</div>

<!-- End of One Item -->



<!-- SBP 18-->		

<div class="item mix cpaper" data-year="2018">
<div class="pubmain">
<div class="pubassets">

<a href="#" class="pubcollapse">
<i class="icon-plus"></i>
</a>

<a href="https://link.springer.com/chapter/10.1007/978-3-319-93372-6_18" class="tooltips" title="Download" target="_blank">
<i class="icon-cloud-download"></i>
</a>

</div>
SBP-BRiMS 2018 (Acceptance Rate 21%)
<h4 class="pubtitle">Finding Organizational Accounts Based on Structural and Behavioral Factors on Twitter</h4>
<div class="pubauthor">Sultan Alzahrani, Chinmay  Gore, <strong>Amin Salehi</strong>, Hasan Davulcu </div>
<div class="pubcite"><span class="label label-warning">Conference Papers</span>International Conference on Social Computing, Behavioral-Cultural Modeling & Prediction and Behavior Representation in Modeling and Simulation, Washington DC, USA, 2018.</div>

</div>
<div class="pubdetails">
<h4>Abstract</h4>
<p>Various socio-political organizations, from activist groups to propaganda campaigners, create accounts on Twitter to reach out, influence and gain followers. In order to analyze the impact of these organizational accounts, the first step is to identify them. In this paper, we develop and experiment with a set of network-based, behavioral, temporal and spatial characteristics in these accounts, independent of domain or language, to identify features that can be useful in detecting organizational accounts. In order to assess this model, we experimented with a microblog corpus comprised of over 7 million tweets from 150,000 Twitter users in Bangladesh, tweeted between June and October 2016. We sampled 31,139 accounts using cold-start heuristics to locate and label nearly 200 organizational accounts, distributed as 68 NGOs, 62 news outlets, 35 political groups, and 17 public intellectual and iconic figures. The remaining accounts were labeled as individuals. Next, we developed a set of features and experimented with a set of linear and non-linear classifiers. The highest performing sparse logistic regression classifier achieved an accuracy of 68.2% precision and 64.4% recall leading to a 66.2% F1-score in detecting less than 1% rare organizational accounts using a set of content- and language-independent features.</p>
</div>
</div>

<!-- End of One Item -->






    </div>
	</div>



<!-- START Footer -->
 <?php include "includes/footer.php"?>  