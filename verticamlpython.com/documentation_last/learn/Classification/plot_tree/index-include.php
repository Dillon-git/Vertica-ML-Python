<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="classifier.plot_tree">classifier.plot_tree<a class="anchor-link" href="#classifier.plot_tree">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">classifier</span><span class="o">.</span><span class="n">plot_tree</span><span class="p">(</span><span class="n">tree_id</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> 
                     <span class="n">pic_path</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Draws the input tree. The module anytree must be installed in the machine.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">tree_id</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Unique tree identifier. It is an integer between 0 and n_estimators - 1</td> </tr>
    <tr> <td><div class="param_name">pic_path</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Absolute path to save the image of the tree.</td> </tr>
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
<div class="prompt input_prompt">In&nbsp;[36]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.ensemble</span> <span class="k">import</span> <span class="n">RandomForestClassifier</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">RandomForestClassifier</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;public.RF_iris&quot;</span><span class="p">,</span>
                               <span class="n">n_estimators</span> <span class="o">=</span> <span class="mi">20</span><span class="p">,</span>
                               <span class="n">max_features</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">,</span>
                               <span class="n">max_leaf_nodes</span> <span class="o">=</span> <span class="mi">32</span><span class="p">,</span> 
                               <span class="n">sample</span> <span class="o">=</span> <span class="mf">0.7</span><span class="p">,</span>
                               <span class="n">max_depth</span> <span class="o">=</span> <span class="mi">3</span><span class="p">,</span>
                               <span class="n">min_samples_leaf</span> <span class="o">=</span> <span class="mi">5</span><span class="p">,</span>
                               <span class="n">min_info_gain</span> <span class="o">=</span> <span class="mf">0.0</span><span class="p">,</span>
                               <span class="n">nbins</span> <span class="o">=</span> <span class="mi">32</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="s2">&quot;public.iris&quot;</span><span class="p">,</span> 
          <span class="p">[</span><span class="s2">&quot;PetalLengthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;PetalWidthCm&quot;</span><span class="p">],</span> 
          <span class="s2">&quot;Species&quot;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">plot_tree</span><span class="p">(</span><span class="n">tree_id</span> <span class="o">=</span> <span class="mi">3</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>--------------------------------------------------------------------------------
Tree Id: 3
Number of Nodes: 9
Tree Depth: 3
Tree Breadth: 5
--------------------------------------------------------------------------------
[1] (petalwidthcm &lt; 0.625000 ?)
├── [2] =&gt; Iris-setosa (probability = 1.0)
└── [3] (petallengthcm &lt; 4.871875 ?)
    ├── [6] (petallengthcm &lt; 4.687500 ?)
    │   ├── [12] =&gt; Iris-versicolor (probability = 0.970588235294118)
    │   └── [13] =&gt; Iris-versicolor (probability = 0.75)
    └── [7] (petallengthcm &lt; 5.240625 ?)
        ├── [14] =&gt; Iris-virginica (probability = 0.8)
        └── [15] =&gt; Iris-virginica (probability = 1.0)
</pre>
</div>
</div>

</div>
</div>

</div>