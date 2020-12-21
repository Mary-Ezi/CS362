<?php include "includes/header.php"?>
       
 <div id="main">
      	<div id="biography" class="page home" data-pos="home">    	
    	<div id="research" class="page">
    <div class="pageheader">

        <div class="headercontent">

            <div class="section-container">
                <h2 class="title">Research Summary</h2>

                    <div class="row">
                        <div class="col-md-8">
                            <p> 
                            
                            
                            My main research interests and  some of my related experiences are summarized as follows
                            </p>
                            <ul>
                              <li><b>Deep Learning</b>: I have utilized deep learning to tackle different real-world problems. Some applications are as follows:</li>
                              
                                <ul>
                                    <li>Representation Learning</li>
                              
                                     <li>Aspect-Level Sentiment Analysis</li>
                                     
                                     <li>Tag recommendation by using image content and social network context </li>
                                </ul>  
                              
                              <li><b>Natural Language Processing</b> I have worked on several NLP projects which required solving different NLP tasks such as: </li>
                              
                                <ul>
                                    <li>Topic Modeling/Tracking </li>
                              
                                     <li>Opinionated Chatbot </li>
                                     
                                     <li>Text Classification </li>
                                     
                                     <li>Sentiment Analysis </li>
                                     
                                     <li>Topical Authority Discovery </li>
                                     
                                </ul>  
                              
                              <li><b>Social Media Mining</b> I have participated in several projects having social network datasets and tackled many different tasks such as: </li>
                              
                                <ul>
                                    <li>Community Detection/Tracking </li>
                                    
                                     <li>Community Profiling</li>
                                     
                                     
                                     <li>Community Relation Discovery</li>
                              
                                     <li>Centrality Measures</li>
                                     
                                     <li>Link Prediction</li>
                                     
                                </ul>  
                              
                              <li><b>Big Data</b> I have utilized several big data tools such as Spark, Hadoop, Cassandra, and ElasticSearch to confront many aforementioned tasks such as: </li>
                              
                                <ul>
                                    <li>Classification </li>
                                    
                                     <li>Clustering</li>
                                     
                                     <li>Topic Modeling</li>
                                     
                                </ul>  
                              
                              
                            </ul>     

                            
                         <p>   <!–– I have been conducting research using natural language pocessing and social media mining in order to  grasp a deeper understanding of users' opinion and behavior on social media. I am also highly interested in deep learning to solve natural language processing tasks such as aspect-level sentiment analysis and conversational systems. Moreover, I have academic and industrial experiences in big data analytics using the-state-of-the-art technologies such as Spark and Hadoop.
                            My masters research was directed towards recommendation systems, where I worked on tag-based recommender systems.––>
                            
                            </p>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="subtitle text-center">
                                <h3>Interests</h3>
                            </div>
                            <ul class="ul-boxed list-unstyled">
                                <li>Deep Learning</li>
                                <li>Natural Language Processing</li>
                                <li>Social Media Mining</li>
                                <li>Big Data</li>
                                <li>Recommender Systems</li>
                                <li>Social Network Analysis</li>
                                <li>Data Mining and Machine Learning</li>
                                <li>Graph Analysis</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="section color-2">
            <div class="section-container">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="title text-center">
                            <h3>Research Projects</h3>
                        </div>
                        <ul class="ul-withdetails">   


                            
                            
                            
                            <li>
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="image">
                                        <img alt="image" src="img/projects/att_graph_embedding.png"  class="img-responsive"  width="80%" height="50%">
                                        <div class="imageoverlay">
                                            <i class="icon icon-search"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="meta">
                                        <h3>Attributed Graph Representaion Learning</h3>
                                        <p>Learning distributed node representations for graph-structured data in an unsupervised manner.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p>
                                Auto-encoders have emerged as a successful framework for unsupervised learning. However, conventional auto-encoders are incapable of utilizing explicit relations in structured data. To take advantage of relations in graph-structured data, several graph auto-encoders have recently been proposed, but they neglect to reconstruct either the graph structure or node attributes. We present the graph attention auto-encoder (GATE), a neural network architecture for unsupervised representation learning on graph-structured data. Our architecture is able to reconstruct graph-structured inputs, including both node attributes and the graph structure, through stacked encoder/decoder layers equipped with self-attention mechanisms. In the encoder, by considering node attributes as initial node representations, each layer generates new representations of nodes by attending over their neighbors' representations. In the decoder, we attempt to reverse the encoding process to reconstruct node attributes. Moreover, node representations are regularized to reconstruct the graph structure. Our proposed architecture does not need to know the graph structure upfront, and thus it can be applied to inductive learning. Our experiments demonstrate competitive performance on several node classification benchmark datasets for transductive and inductive tasks, even exceeding the performance of supervised learning baselines in most cases.
                                </p>
                            </div>
                            </li>
                            
                            
                            
                            

                            <li>
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="image">
                                        <img alt="image" src="img/projects/community-profiling.png"  class="img-responsive">
                                        <div class="imageoverlay">
                                            <i class="icon icon-search"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="meta">
                                        <h3>Sentiment-driven Community Profiling and Detection</h3>
                                        <p>Discovering communities and their profiles on social media in an unsupervised manner.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p>
                                Web 2.0 helps to expand the range and depth of conversation on many issues and facilitates the formation of online communities. Online communities draw various individuals together based on their common opinions on a core set of issues. Most existing community detection methods merely focus on discovering communities without providing any insight regarding the collective attitudes of users and the motives behind the formation of communities. To that end, we present a framework which simultaneously detects and profiles communities. The proposed framework initially extracts key expressions in users' messages as issues and then identifies users' positive/negative attitudes toward these issues. Next, it uncovers a low-dimensional latent space in order to cluster users according to their opinions and social interactions. Simultaneously, our framework divides the issues important to each community into two categories of positively and negatively viewed issues. This results in community profiles reflecting positive and negative collective attitudes of community members.
                                The following table shows the profiles of two detected communities from US political tweets.
                                </p>
                                <img alt="image" src="img/projects/community-profiling.png" width="100%" height="100%">
                            </div>
                            </li>



                            <li>
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="image">
                                        <img alt="image" src="img/projects/community-relations_us.png"  class="img-responsive">
                                        <div class="imageoverlay">
                                            <i class="icon icon-search"></i>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="meta">
                                        <h3>Inter-community Relation Discovery</h3>
                                        <p>Detecting antagonistic and allied Communities on social media in an unsupervised manner.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <p>
                                Community detection on social media has attracted considerable attention for many years. However, existing methods do not reveal the relations between communities. Communities can form alliances or engage in antagonisms due to various factors, e.g., shared or conflicting goals and values. Uncovering such relations can provide better insights to understand communities and the structure of social media. According to social science findings, the attitudes that members from different communities express towards each other are largely shaped by their community membership. Hence, we hypothesize that intercommunity attitudes expressed among users in social media have the potential to reflect their inter-community relations. Therefore, we first validate this hypothesis in the context of social media. Then, inspired by the hypothesis, we develop a framework to detect communities and their relations by jointly modeling users' attitudes and social interactions.
                                The following table shows the relation of five detected communities from Australian political tweets. As shown, our model is able to detect the coalition among liberals, nationalists, and liberal nationalist.
                                </p>
                                <img alt="image" src="img/projects/community-relations_australia.png" width="100%" height="100%">
                            </div>
                            </li>

                            

                        </ul>
                    </div>
                </div>
            </div>
        </div>
  



    
	
<!-- START Footer -->
 <?php include "includes/footer.php"?>  