<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="DBSCAN-(Beta)">DBSCAN (Beta)<a class="anchor-link" href="#DBSCAN-(Beta)">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">DBSCAN</span><span class="p">(</span><span class="n">name</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span>
       <span class="n">cursor</span> <span class="o">=</span> <span class="kc">None</span><span class="p">,</span>
       <span class="n">eps</span><span class="p">:</span> <span class="nb">float</span> <span class="o">=</span> <span class="mf">0.5</span><span class="p">,</span>
       <span class="n">min_samples</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">5</span><span class="p">,</span>
       <span class="n">p</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">2</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Creates a DBSCAN object by using the DBSCAN algorithm as defined by Martin 
Ester, Hans-Peter Kriegel, Jörg Sander and Xiaowei Xu. This object is using 
pure SQL to compute all the distances and neighbors. It is also using Python 
to compute the cluster propagation (non scalable phase). This model is using 
CROSS JOIN and may be really expensive in some cases. It will index all the 
elements of the table in order to be optimal (the CROSS JOIN will happen only 
with IDs which are integers). As DBSCAN is using the p-distance, it is highly 
sensible to un-normalized data. However, DBSCAN is really robust to outliers 
and can find non-linear clusters. It is a very powerful algorithm for outliers 
detection and clustering.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">name</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Name of the the model. As it is not a built in model, this name will be used to build the final table.</td> </tr>
    <tr> <td><div class="param_name">cursor</div></td> <td><div class="type">DBcursor</div></td> <td><div class = "yes">&#10003;</div></td> <td>Vertica DB cursor.</td> </tr>
    <tr> <td><div class="param_name">eps</div></td> <td><div class="type">float</div></td> <td><div class = "yes">&#10003;</div></td> <td>The radius of a neighborhood with respect to some point.</td> </tr>
    <tr> <td><div class="param_name">min_samples</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Minimum number of points required to form a dense region.</td> </tr>
    <tr> <td><div class="param_name">p</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>The p of the p-distance (distance metric used during the model computation).</td> </tr>
</table><h3 id="Attributes">Attributes<a class="anchor-link" href="#Attributes">&#182;</a></h3><p>After the object creation, all the parameters become attributes. The model will also create extra attributes when fitting the model:</p>
<table id="parameters">
    <tr> <th>Name</th> <th>Type</th>  <th>Description</th> </tr>
    <tr> <td><div class="param_name">n_cluster</div></td> <td><div class="type">int</div></td> <td>Number of clusters created during the process.</td> </tr>
    <tr> <td><div class="param_name">n_noise</div></td> <td><div class="type">int</div></td> <td>Number of points with no clusters.</td> </tr>
    <tr> <td><div class="param_name">input_relation</div></td> <td><div class="type">str</div></td> <td>Train relation.</td> </tr>
    <tr> <td><div class="param_name">X</div></td> <td><div class="type">list</div></td> <td>List of the predictors.</td> </tr>
    <tr> <td><div class="param_name">key_columns</div></td> <td><div class="type">list</div></td> <td>Columns not used during the algorithm computation but which will be used to create the final relation.</td> </tr>
</table><h3 id="Methods">Methods<a class="anchor-link" href="#Methods">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Description</th> </tr>
    <tr> <td><a href="../Unsupervised/fit2/index.php">fit</a></td> <td>Trains the model.</td> </tr>
    <tr> <td><a href="../Unsupervised/info/index.php">info</a></td> <td>Displays some information about the model.</td> </tr>
    <tr> <td><a href="../Unsupervised/plot2/index.php">plot</a></td> <td>Draws the model if the number of predictors is 2 or 3.</td> </tr>
    <tr> <td><a href="../Unsupervised/to_vdf/index.php">to_vdf</a></td> <td>Creates a vDataFrame of the model.</td> </tr>
</table>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[1]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.cluster</span> <span class="k">import</span> <span class="n">DBSCAN</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">DBSCAN</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;public.DBSCAN_heart&quot;</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">model</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;DBSCAN&gt;
</pre>
</div>
</div>

</div>
</div>

</div>