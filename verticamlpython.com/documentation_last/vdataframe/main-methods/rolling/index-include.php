<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame.rolling">vDataFrame.rolling<a class="anchor-link" href="#vDataFrame.rolling">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="o">.</span><span class="n">rolling</span><span class="p">(</span><span class="n">func</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> 
                   <span class="n">column</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> 
                   <span class="n">preceding</span><span class="p">,</span> 
                   <span class="n">following</span><span class="p">,</span> 
                   <span class="n">column2</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">,</span>
                   <span class="n">name</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">,</span>
                   <span class="n">by</span><span class="p">:</span> <span class="nb">list</span> <span class="o">=</span> <span class="p">[],</span> 
                   <span class="n">order_by</span> <span class="o">=</span> <span class="p">[],</span>
                   <span class="n">method</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;rows&quot;</span><span class="p">,</span>
                   <span class="n">rule</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Adds a new vcolumn to the vDataFrame by using an advanced analytical window function on one or two specific vcolumns.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">func</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Function to use.<br>
                                                    <ul>
                                                        <li><b>beta :</b> Beta Coefficient between 2 vcolumns</li>
                                                        <li><b>count :</b> number of non-missing elements</li>
                                                        <li><b>corr :</b> Pearson correlation between 2 vcolumns</li>
                                                        <li><b>cov :</b> covariance between 2 vcolumns</li>
                                                        <li><b>kurtosis :</b> kurtosis</li>
                                                        <li><b>jb :</b> Jarque Bera index </li>
                                                        <li><b>mae :</b> mean absolute error (deviation)</li>
                                                        <li><b>max :</b> maximum</li>
                                                        <li><b>mean :</b> average</li>
                                                        <li><b>min :</b> min</li>
                                                        <li><b>prod :</b> product</li>
                                                        <li><b>range :</b> difference between the max and the min</li>
                                                        <li><b>sem :</b> standard error of the mean</li>
                                                        <li><b>skewness :</b> skewness</li>
                                                        <li><b>sum :</b> sum</li>
                                                        <li><b>std :</b> standard deviation</li>
                                                        <li><b>var :</b> variance</li>
                                                        <li>Other aggregations could work if it is part of the DB version you are using.</li></ul></td> </tr>
    <tr> <td><div class="param_name">column</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Input vcolumn.</td> </tr>
    <tr> <td><div class="param_name">preceding</div></td> <td><div class="type">int / str</div></td> <td><div class = "no">&#10060;</div></td> <td>First part of the moving window. With which lag/lead the window should begin. It can be an integer or an interval.</td> </tr>
    <tr> <td><div class="param_name">following</div></td> <td><div class="type">int / str</div></td> <td><div class = "no">&#10060;</div></td> <td>Second part of the moving window. With which lag/lead the window should end. It can be an integer or an interval.</td> </tr>
    <tr> <td><div class="param_name">column2</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Second input vcolumn in case of functions using 2 parameters.</td> </tr>
    <tr> <td><div class="param_name">name</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Name of the new vcolumn. If empty a default name based on the other parameters will be generated.</td> </tr>
    <tr> <td><div class="param_name">by</div></td> <td><div class="type">list</div></td> <td><div class = "yes">&#10003;</div></td> <td>vcolumns used in the partition.</td> </tr>
    <tr> <td><div class="param_name">order_by</div></td> <td><div class="type">dict / list</div></td> <td><div class = "yes">&#10003;</div></td> <td>List of the vcolumns used to sort the data using asc order or dictionary of all the sorting methods. For example, to sort by "column1" ASC and "column2" DESC, write {"column1": "asc", "column2": "desc"}</td> </tr>
    <tr> <td><div class="param_name">method</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Method used to compute the window.<br>
                                                    <ul>
                                                        <li><b>rows :</b> Uses number of leads/lags instead of time intervals</li>
                                                        <li><b>range :</b> Uses time intervals instead of number of leads/lags</li></ul></td> </tr>
    <tr> <td><div class="param_name">rule</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Rule used to compute the window.<br>
                                                    <ul>
                                                        <li><b>auto :</b> The 'preceding' parameter will correspond to a past event and the parameter 'following' to a future event.</li>
                                                        <li><b>past :</b> Both parameters 'preceding' and following will consider past events.</li>
        <li><b>future :</b> Both parameters 'preceding' and following will consider future events.</li></ul></td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>vDataFrame</b> : self</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[77]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python</span> <span class="k">import</span> <span class="n">vDataFrame</span>
<span class="n">flights</span> <span class="o">=</span> <span class="n">vDataFrame</span><span class="p">(</span><span class="s2">&quot;public.flights&quot;</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">flights</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>scheduled_departure</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>airline</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>destination_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>arrival_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>departure_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>origin_airport</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">2015-10-01 10:09:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-2</td><td style="border: 1px solid white;">-9</td><td style="border: 1px solid white;">11433</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">2015-10-01 10:27:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-14</td><td style="border: 1px solid white;">-3</td><td style="border: 1px solid white;">10397</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">2015-10-01 13:57:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">-4</td><td style="border: 1px solid white;">13930</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">2015-10-01 14:02:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-8</td><td style="border: 1px solid white;">-3</td><td style="border: 1px solid white;">11433</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">2015-10-01 14:44:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">10397</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: flights, Number of rows: 4068736, Number of columns: 6
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[73]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># AVG delay using the 10 previous similar flights for the same airline</span>
<span class="c1"># method &#39;past&#39; is used to change the &#39;following&#39; to &#39;preceding&#39;</span>
<span class="n">flights</span><span class="o">.</span><span class="n">rolling</span><span class="p">(</span><span class="n">func</span> <span class="o">=</span> <span class="s2">&quot;avg&quot;</span><span class="p">,</span>
                <span class="n">column</span> <span class="o">=</span> <span class="s2">&quot;departure_delay&quot;</span><span class="p">,</span>
                <span class="n">preceding</span> <span class="o">=</span> <span class="mi">10</span><span class="p">,</span>
                <span class="n">following</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span>
                <span class="n">by</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;origin_airport&quot;</span><span class="p">,</span> <span class="s2">&quot;destination_airport&quot;</span><span class="p">,</span> <span class="s2">&quot;airline&quot;</span><span class="p">],</span>
                <span class="n">order_by</span> <span class="o">=</span> <span class="p">{</span><span class="s2">&quot;scheduled_departure&quot;</span><span class="p">:</span> <span class="s2">&quot;asc&quot;</span><span class="p">},</span>
                <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;rows&quot;</span><span class="p">,</span>
                <span class="n">rule</span> <span class="o">=</span> <span class="s2">&quot;past&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>departure_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>origin_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>scheduled_departure</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>airline</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>destination_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>arrival_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>moving_avg_departure_delay__10_1_past</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">-3</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">2015-10-01 21:06:00</td><td style="border: 1px solid white;">DL</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-14</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">-2</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">2015-10-02 21:06:00</td><td style="border: 1px solid white;">DL</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-14</td><td style="border: 1px solid white;">-3.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-2</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">2015-10-03 21:06:00</td><td style="border: 1px solid white;">DL</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-16</td><td style="border: 1px solid white;">-2.5</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-7</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">2015-10-04 21:06:00</td><td style="border: 1px solid white;">DL</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">-13</td><td style="border: 1px solid white;">-2.33333333333333</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">2015-10-05 21:06:00</td><td style="border: 1px solid white;">DL</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">-3.5</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[73]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: flights, Number of rows: 4068736, Number of columns: 7</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[76]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Corr between arrival_delay and departure_delay using the 100 previous flights</span>
<span class="c1"># and the 10 following flights at the same airport</span>
<span class="n">flights</span><span class="o">.</span><span class="n">rolling</span><span class="p">(</span><span class="n">func</span> <span class="o">=</span> <span class="s2">&quot;corr&quot;</span><span class="p">,</span>
                <span class="n">column</span> <span class="o">=</span> <span class="s2">&quot;departure_delay&quot;</span><span class="p">,</span>
                <span class="n">column2</span> <span class="o">=</span> <span class="s2">&quot;arrival_delay&quot;</span><span class="p">,</span>
                <span class="n">preceding</span> <span class="o">=</span> <span class="mi">100</span><span class="p">,</span>
                <span class="n">following</span> <span class="o">=</span> <span class="mi">10</span><span class="p">,</span>
                <span class="n">by</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;origin_airport&quot;</span><span class="p">],</span>
                <span class="n">order_by</span> <span class="o">=</span> <span class="p">{</span><span class="s2">&quot;scheduled_departure&quot;</span><span class="p">:</span> <span class="s2">&quot;asc&quot;</span><span class="p">},</span>
                <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;rows&quot;</span><span class="p">,</span>
                <span class="n">rule</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>departure_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>origin_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>scheduled_departure</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>airline</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>destination_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>arrival_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>departure_delay_mean_moving_corr_departure_delay_arrival_delay_100_10_auto</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>arrival_delay_mean_moving_corr_departure_delay_arrival_delay_100_10_auto</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>moving_corr_departure_delay_arrival_delay_100_10_auto</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">-6</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">2015-10-01 12:00:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">10</td><td style="border: 1px solid white;">-2.54545454545455</td><td style="border: 1px solid white;">-0.727272727272727</td><td style="border: 1px solid white;">0.665496986330034</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">-8</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">2015-10-01 12:05:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">13930</td><td style="border: 1px solid white;">-3</td><td style="border: 1px solid white;">-2.25</td><td style="border: 1px solid white;">-1.0</td><td style="border: 1px solid white;">1.08144135243024</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-7</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">2015-10-01 12:55:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">11433</td><td style="border: 1px solid white;">-10</td><td style="border: 1px solid white;">-2.76923076923077</td><td style="border: 1px solid white;">-2.0</td><td style="border: 1px solid white;">2.032741145048</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-5</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">2015-10-01 16:00:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">10397</td><td style="border: 1px solid white;">-1</td><td style="border: 1px solid white;">-1.07142857142857</td><td style="border: 1px solid white;">-0.642857142857143</td><td style="border: 1px solid white;">1.03197084212886</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">10135</td><td style="border: 1px solid white;">2015-10-01 17:11:00</td><td style="border: 1px solid white;">EV</td><td style="border: 1px solid white;">11433</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0.333333333333333</td><td style="border: 1px solid white;">0.0666666666666667</td><td style="border: 1px solid white;">0.801369105671833</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[76]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: flights, Number of rows: 4068736, Number of columns: 9</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[78]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Number of flights the airline has to manage 2 hours preceding </span>
<span class="c1"># the flight and 1 hour following</span>
<span class="n">flights</span><span class="o">.</span><span class="n">rolling</span><span class="p">(</span><span class="n">func</span> <span class="o">=</span> <span class="s2">&quot;count&quot;</span><span class="p">,</span>
                <span class="n">column</span> <span class="o">=</span> <span class="s2">&quot;scheduled_departure&quot;</span><span class="p">,</span>
                <span class="n">preceding</span> <span class="o">=</span> <span class="s1">&#39;2 hours&#39;</span><span class="p">,</span>
                <span class="n">following</span> <span class="o">=</span> <span class="s1">&#39;1 hour&#39;</span><span class="p">,</span>
                <span class="n">by</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;origin_airport&quot;</span><span class="p">,</span> <span class="s2">&quot;airline&quot;</span><span class="p">],</span>
                <span class="n">order_by</span> <span class="o">=</span> <span class="p">{</span><span class="s2">&quot;scheduled_departure&quot;</span><span class="p">:</span> <span class="s2">&quot;asc&quot;</span><span class="p">},</span>
                <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;range&quot;</span><span class="p">,</span>
                <span class="n">rule</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>scheduled_departure</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>airline</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>destination_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>arrival_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>departure_delay</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>origin_airport</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>moving_count_scheduled_departure__2hours_1hour_auto</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">2015-10-01 10:55:00</td><td style="border: 1px solid white;">AA</td><td style="border: 1px solid white;">11298</td><td style="border: 1px solid white;">-20</td><td style="border: 1px solid white;">-11</td><td style="border: 1px solid white;">10140</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">2015-10-01 12:09:00</td><td style="border: 1px solid white;">AA</td><td style="border: 1px solid white;">11298</td><td style="border: 1px solid white;">-18</td><td style="border: 1px solid white;">-10</td><td style="border: 1px solid white;">10140</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">2015-10-01 14:20:00</td><td style="border: 1px solid white;">AA</td><td style="border: 1px solid white;">11298</td><td style="border: 1px solid white;">-11</td><td style="border: 1px solid white;">-2</td><td style="border: 1px solid white;">10140</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">2015-10-01 16:19:00</td><td style="border: 1px solid white;">AA</td><td style="border: 1px solid white;">11298</td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">-6</td><td style="border: 1px solid white;">10140</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">2015-10-02 10:55:00</td><td style="border: 1px solid white;">AA</td><td style="border: 1px solid white;">11298</td><td style="border: 1px solid white;">-28</td><td style="border: 1px solid white;">-9</td><td style="border: 1px solid white;">10140</td><td style="border: 1px solid white;">1</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[78]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: flights, Number of rows: 4068736, Number of columns: 7</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="See-Also">See Also<a class="anchor-link" href="#See-Also">&#182;</a></h3><table id="seealso">
    <tr><td><a href="../analytic/index.php">vDataFrame.analytic</a></td> <td> Adds a new vcolumn to the vDataFrame by using an advanced analytical function on a specific vcolumn.</td></tr>
    <tr><td><a href="../eval/index.php">vDataFrame.eval</a></td> <td> Evaluates a customized expression.</td></tr>
</table>
</div>
</div>
</div>