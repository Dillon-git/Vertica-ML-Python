<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>First, install the API using the <b>pip</b> command.</p>
<div class="highlight"><pre><span></span>root@ubuntu:~$ pip3 install vertica_ml_python
</pre></div>
<p>You can then choose which type of connection you want to use.</p>
<ul class="ul_content">
<li><b>vertica_python</b> (Native Python Client)</li>
<li><b>pyodbc</b> (ODBC) </li>
<li><b>jaydebeapi</b> (JDBC)</li>
</ul>
<p>These modules will give you the possibility to create DataBase cursor which will be used to communicate with your Vertica DataBase.</p>
<p>For example, use the following command to install the <b>vertica_python</b> module.</p>
<div class="highlight"><pre><span></span>root@ubuntu:~$ pip3 install vertica_python
</pre></div>
<p>If you already have a DataBase DSN, you can easily create a DB cursor.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[1]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python</span> <span class="k">import</span> <span class="o">*</span>
<span class="n">cur</span> <span class="o">=</span> <span class="n">vertica_cursor</span><span class="p">(</span><span class="s2">&quot;VerticaDSN&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Otherwise, you can set-up a permanent auto-connection in few seconds.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[2]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.connections.connect</span> <span class="k">import</span> <span class="o">*</span>
<span class="n">new_auto_connection</span><span class="p">({</span><span class="s2">&quot;host&quot;</span><span class="p">:</span> <span class="s2">&quot;10.211.55.14&quot;</span><span class="p">,</span> 
                     <span class="s2">&quot;port&quot;</span><span class="p">:</span> <span class="s2">&quot;5433&quot;</span><span class="p">,</span> 
                     <span class="s2">&quot;database&quot;</span><span class="p">:</span> <span class="s2">&quot;testdb&quot;</span><span class="p">,</span> 
                     <span class="s2">&quot;password&quot;</span><span class="p">:</span> <span class="s2">&quot;XxX&quot;</span><span class="p">,</span> 
                     <span class="s2">&quot;user&quot;</span><span class="p">:</span> <span class="s2">&quot;dbadmin&quot;</span><span class="p">},</span> 
                    <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;vertica_python&quot;</span><span class="p">,</span> 
                    <span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;VerticaDSN&quot;</span><span class="p">)</span>
<span class="n">change_auto_connection</span><span class="p">(</span><span class="s2">&quot;VerticaDSN&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>You can start playing with the data in your Vertica DataBase.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[3]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="p">(</span><span class="s2">&quot;public.iris&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Species</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalWidthCm</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">1.10</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.30</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.10</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">1.40</td><td style="border: 1px solid white;">2.90</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.20</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">2.30</td><td style="border: 1px solid white;">4.50</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.30</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[3]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: iris, Number of rows: 150, Number of columns: 5</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>If you don't have data to start using the API, you can easily load well known datasets.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[4]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_titanic</span>
<span class="n">vdf</span> <span class="o">=</span> <span class="n">load_titanic</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>We can start discovering the data.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[5]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vdf</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>body</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pclass</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>age</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>name</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>cabin</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>boat</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>ticket</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>home.dest</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">2.000</td><td style="border: 1px solid white;">Allison, Miss. Helen Loraine</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">135</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">30.000</td><td style="border: 1px solid white;">Allison, Mr. Hudson Joshua Creighton</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">25.000</td><td style="border: 1px solid white;">Allison, Mrs. Hudson J C (Bessie Waldo Daniels)</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.00000</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">39.000</td><td style="border: 1px solid white;">Andrews, Mr. Thomas Jr</td><td style="border: 1px solid white;">A36</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">112050</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Belfast, NI</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">49.50420</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">22</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">71.000</td><td style="border: 1px solid white;">Artagaveytia, Mr. Ramon</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">PC 17609</td><td style="border: 1px solid white;">C</td><td style="border: 1px solid white;">Montevideo, Uruguay</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[5]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic, Number of rows: 1234, Number of columns: 14</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>As everything is happening in the DataBase and nothing is loaded in memory (except the aggregations), you can display the SQL code generation using the <b>sql_on_off</b> method.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[6]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vdf</span><span class="o">.</span><span class="n">sql_on_off</span><span class="p">()</span>
<span class="n">vdf</span><span class="o">.</span><span class="n">describe</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<h4 style = 'color : #444444; text-decoration : underline;'>Computes the descriptive statistics of all the numerical columns using SUMMARIZE_NUMCOL.</h4>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
 &emsp;  SELECT <br> &emsp;  &emsp;  SUMMARIZE_NUMCOL("fare", "body", "pclass", "age", "parch", "survived", "sibsp") OVER () &emsp; <br> &emsp;  FROM <br> "public"."titanic"
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div style = 'border : 1px dashed black; width : 100%'></div>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<h4 style = 'color : #444444; text-decoration : underline;'>Computes the different aggregations.</h4>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
 &emsp;  SELECT <br> &emsp;  &emsp;  COUNT(DISTINCT "age"), <br> &emsp;  &emsp;  COUNT(DISTINCT "body"), <br> &emsp;  &emsp;  COUNT(DISTINCT "fare"), <br> &emsp;  &emsp;  COUNT(DISTINCT "parch"), <br> &emsp;  &emsp;  COUNT(DISTINCT "pclass"), <br> &emsp;  &emsp;  COUNT(DISTINCT "sibsp"), <br> &emsp;  &emsp;  COUNT(DISTINCT "survived") &emsp; <br> &emsp;  FROM <br> "public"."titanic" LIMIT 1
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<div style = 'border : 1px dashed black; width : 100%'></div>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>body</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pclass</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>age</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>name</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>cabin</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>boat</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>ticket</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>home.dest</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">2.000</td><td style="border: 1px solid white;">Allison, Miss. Helen Loraine</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">135</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">30.000</td><td style="border: 1px solid white;">Allison, Mr. Hudson Joshua Creighton</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">151.55000</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">25.000</td><td style="border: 1px solid white;">Allison, Mrs. Hudson J C (Bessie Waldo Daniels)</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.00000</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">39.000</td><td style="border: 1px solid white;">Andrews, Mr. Thomas Jr</td><td style="border: 1px solid white;">A36</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">112050</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Belfast, NI</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">49.50420</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">22</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">71.000</td><td style="border: 1px solid white;">Artagaveytia, Mr. Ramon</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">PC 17609</td><td style="border: 1px solid white;">C</td><td style="border: 1px solid white;">Montevideo, Uruguay</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[6]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic, Number of rows: 1234, Number of columns: 14</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Vertica ML Python is smart enough to not re-compute twice the same aggregation. Each Virtual Column has its own catalog which will be updated depending on the user modifications.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vdf</span><span class="p">[</span><span class="s2">&quot;age&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">catalog</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[7]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>{&#39;25%&#39;: 21,
 &#39;50%&#39;: 28,
 &#39;75%&#39;: 39,
 &#39;avg&#39;: 30.1524573721163,
 &#39;biserial&#39;: {},
 &#39;count&#39;: 997,
 &#39;cov&#39;: {},
 &#39;cramer&#39;: {},
 &#39;kendall&#39;: {},
 &#39;max&#39;: 80,
 &#39;min&#39;: 0.33,
 &#39;pearson&#39;: {},
 &#39;regr_avgx&#39;: {},
 &#39;regr_avgy&#39;: {},
 &#39;regr_count&#39;: {},
 &#39;regr_intercept&#39;: {},
 &#39;regr_r2&#39;: {},
 &#39;regr_slope&#39;: {},
 &#39;regr_sxx&#39;: {},
 &#39;regr_sxy&#39;: {},
 &#39;regr_syy&#39;: {},
 &#39;spearman&#39;: {},
 &#39;std&#39;: 14.4353046299159,
 &#39;unique&#39;: 96}</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Two lines of codes are enough to prepare your data and to train your ML models.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[8]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Modules</span>
<span class="kn">from</span> <span class="nn">vertica_ml_python.learn.model_selection</span> <span class="k">import</span> <span class="n">cross_validate</span>
<span class="kn">from</span> <span class="nn">vertica_ml_python.learn.ensemble</span> <span class="k">import</span> <span class="n">RandomForestClassifier</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[9]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Data Preparation</span>
<span class="n">vdf</span><span class="p">[</span><span class="s2">&quot;sex&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">label_encode</span><span class="p">()[</span><span class="s2">&quot;boat&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">fillna</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;0ifnull&quot;</span><span class="p">)[</span><span class="s2">&quot;name&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">str_extract</span><span class="p">(</span>
    <span class="s1">&#39; ([A-Za-z]+)\.&#39;</span><span class="p">)</span><span class="o">.</span><span class="n">eval</span><span class="p">(</span><span class="s2">&quot;family_size&quot;</span><span class="p">,</span> <span class="n">expr</span> <span class="o">=</span> <span class="s2">&quot;parch + sibsp + 1&quot;</span><span class="p">)</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span>
    <span class="n">columns</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;cabin&quot;</span><span class="p">,</span> <span class="s2">&quot;body&quot;</span><span class="p">,</span> <span class="s2">&quot;ticket&quot;</span><span class="p">,</span> <span class="s2">&quot;home.dest&quot;</span><span class="p">])[</span><span class="s2">&quot;fare&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">fill_outliers</span><span class="p">()</span><span class="o">.</span><span class="n">fillna</span><span class="p">(</span>
    <span class="p">)</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="s2">&quot;titanic_clean&quot;</span><span class="p">)</span>

<span class="c1"># Model Evaluation</span>
<span class="n">cross_validate</span><span class="p">(</span><span class="n">RandomForestClassifier</span><span class="p">(</span><span class="s2">&quot;rf_titanic&quot;</span><span class="p">,</span> <span class="n">max_leaf_nodes</span> <span class="o">=</span> <span class="mi">100</span><span class="p">,</span> <span class="n">n_estimators</span> <span class="o">=</span> <span class="mi">30</span><span class="p">),</span> 
               <span class="s2">&quot;titanic_clean&quot;</span><span class="p">,</span> 
               <span class="p">[</span><span class="s2">&quot;age&quot;</span><span class="p">,</span> <span class="s2">&quot;family_size&quot;</span><span class="p">,</span> <span class="s2">&quot;sex&quot;</span><span class="p">,</span> <span class="s2">&quot;pclass&quot;</span><span class="p">,</span> <span class="s2">&quot;fare&quot;</span><span class="p">,</span> <span class="s2">&quot;boat&quot;</span><span class="p">],</span> 
               <span class="s2">&quot;survived&quot;</span><span class="p">,</span> 
               <span class="n">cutoff</span> <span class="o">=</span> <span class="mf">0.35</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>The view titanic_clean was successfully dropped.
795 element(s) was/were filled
</pre>
</div>
</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>auc</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>prc_auc</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>accuracy</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>log_loss</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>precision</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>recall</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>f1-score</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>mcc</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>informedness</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>markedness</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>csi</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1-fold</b></td><td style="border: 1px solid white;">0.997543209876543</td><td style="border: 1px solid white;">0.9952570413267694</td><td style="border: 1px solid white;">0.978571428571429</td><td style="border: 1px solid white;">0.0243404652845131</td><td style="border: 1px solid white;">0.9933333333333333</td><td style="border: 1px solid white;">0.9490445859872612</td><td style="border: 1px solid white;">0.9720496507762603</td><td style="border: 1px solid white;">0.9544283681126704</td><td style="border: 1px solid white;">0.9452423046184397</td><td style="border: 1px solid white;">0.9637037037037035</td><td style="border: 1px solid white;">0.9430379746835443</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2-fold</b></td><td style="border: 1px solid white;">0.9857843805370042</td><td style="border: 1px solid white;">0.9649935042748308</td><td style="border: 1px solid white;">0.962311557788945</td><td style="border: 1px solid white;">0.277996880665958</td><td style="border: 1px solid white;">0.9310344827586207</td><td style="border: 1px solid white;">0.9642857142857143</td><td style="border: 1px solid white;">0.9627606038820993</td><td style="border: 1px solid white;">0.9183711750829263</td><td style="border: 1px solid white;">0.9255260243632337</td><td style="border: 1px solid white;">0.9112716369088183</td><td style="border: 1px solid white;">0.9</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3-fold</b></td><td style="border: 1px solid white;">0.9928562600420211</td><td style="border: 1px solid white;">0.991183792248719</td><td style="border: 1px solid white;">0.966346153846154</td><td style="border: 1px solid white;">0.0430437379750121</td><td style="border: 1px solid white;">0.9483870967741935</td><td style="border: 1px solid white;">0.9607843137254902</td><td style="border: 1px solid white;">0.9651629847057006</td><td style="border: 1px solid white;">0.9278790026890955</td><td style="border: 1px solid white;">0.9303660627749197</td><td style="border: 1px solid white;">0.9253985910270672</td><td style="border: 1px solid white;">0.9130434782608695</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>avg</b></td><td style="border: 1px solid white;">0.9920612834851894</td><td style="border: 1px solid white;">0.9838114459501064</td><td style="border: 1px solid white;">0.9690763800688427</td><td style="border: 1px solid white;">0.11512702797516107</td><td style="border: 1px solid white;">0.9575849709553825</td><td style="border: 1px solid white;">0.9580382046661552</td><td style="border: 1px solid white;">0.9666577464546867</td><td style="border: 1px solid white;">0.9335595152948974</td><td style="border: 1px solid white;">0.9337114639188644</td><td style="border: 1px solid white;">0.9334579772131963</td><td style="border: 1px solid white;">0.918693817648138</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>std</b></td><td style="border: 1px solid white;">0.005919586780640461</td><td style="border: 1px solid white;">0.016423581709953398</td><td style="border: 1px solid white;">0.008466785156484254</td><td style="border: 1px solid white;">0.14135909871308325</td><td style="border: 1px solid white;">0.03215178630842041</td><td style="border: 1px solid white;">0.007983034146037371</td><td style="border: 1px solid white;">0.0048215487724541884</td><td style="border: 1px solid white;">0.018687735547533897</td><td style="border: 1px solid white;">0.010275052719372594</td><td style="border: 1px solid white;">0.02712924043110501</td><td style="border: 1px solid white;">0.022068338578353334</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[9]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Vertica ML Python helps you to bring the logic to the data with few lines of codes.<br>
Instead of finding a way to deploy your work, use your time for more useful purposes.<br><br>
Happy Playing ! &#128540;</p>

</div>
</div>
</div>