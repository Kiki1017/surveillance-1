
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<hr><b>Description:</b>
<ul>
<ul>
<ul>
<li> The intention of the R-package <tt>surveillance</tt> is to
     provide open source software  for the visualization, modelling and
    monitoring of count data and categorical time series.</li>
<li> The main application is in the detection of aberrations in routine collected
  public health data seen as univariate and multivariate time series of
  counts. Hence, potential users are biostatisticians, epidemiologists and others working in applied infectious disease epidemiology. However, applications could just as well originate from
  environmetrics, reliability engineering, econometrics or social sciences. </li>
<li> <tt>surveillance</tt> provides an S4 class data structure and framework for methodological developments of change-point algorithms. 
<li> The following outbreak detection procedures for cound data time series are implemented in the package:</li>
<ul>
<li>Stroup et al. (1989)</li>
<li>Farrington et al. (1996)</li>
<li>The system used at the Robert Koch
Institute (RKI), Germany. </li>
<li>A Bayesian predictive posterior approach documented in
H&ouml;hle (2007)<br>
</li>
<li>An online version of the Hidden Markov Model approach by
Le Strat and Carrat (1999)
<li>Surveillance for time varying Poisson means as documented in
Rogerson and Yamada (2004). <br> This approach has been extended to
cover time varying proportions in a binomial setting.
</li>
<li>An approximate CUSUM method for time varying Poisson means
as documented in Rossi et al (1999)</li>
<li>Likelihood and generalized likelihood ratio detectors for time varying
Poisson and negative binomial means documented in H&ouml;hle and Paul (2008)<br>
</li>
</ul>
     <li>Categorical models include change-point detection based on regression models for binomial and beta-binomial distributed response.  Furthermore, multi-categorical models include the paired-binary approach taken in Steiner et al. (1999) and the multinomial logistic model, proportional odds model and Bthe radley-Terry models described in  H&ouml;hle (2010).</li>



<li>Retrospective modelling of univariate and multivariate count data time series is also available as estimation and prediction routines for the
models described in 
<ul>
     <li>Held et al. (2005) and Paul et al. (2008)</li>
     <li>Held et al. (2006)</li>
</ul>
<li>For evaluation purposes, the package contains example
datasets drawn
from the SurvStat@RKI Database maintained the RKI, Germany. More
comprehensive comparisons using simulation studies are possible by
methods for simulating point source outbreak data using a hidden Markov
model. To compare the algorithms, benchmark numbers like sensitivity,
specificity and detection delay can be computed for entire sets of
surveillance time series. </li>
<li>The package comes with ABSOLUTELY NO WARRANTY; for details
see <a href="http://www.gnu.org/copyleft/gpl.html">http://www.gnu.org/copyleft/gpl.html</a>
(GPL). This is free software, and and you are welcome to redistribute
it
under the GPL conditions.</li>
</ul>
</ul>
</ul>
<hr>
<b>Download:</b>
<blockquote>
<blockquote>
<blockquote> The <tt>surveillance</tt> package (version 1.1-2) is
available for download from <a
href="http://cran.r-project.org/src/contrib/Descriptions/surveillance.html">CRAN</a>.<br>
      Current package development, help-forum and bugtracking is hosted through
R-Forge:<br>
<br>
<div style="text-align: center;"><a
href="https://r-forge.r-project.org/projects/surveillance/">https://r-forge.r-project.org/projects/surveillance/</a><br>
</div>
<br>
From this page snapshots of the current development version are available.<br>
<br>
New features:<br>
<ul>
      <li>(>0.9-10) See NEWS file in the current distribution</li>
</ul>
<ul>
</ul>
</blockquote>
</blockquote>
</blockquote>
<hr><b>Documentation:</b>
<blockquote>
<blockquote>
<ul>
<li>A good (but slightly old) introduction to the package is provided in the paper <a
href="http://dx.doi.org/10.1007/s00180-007-0074-8"><span
style="font-family: monospace;">surveillance</span>:
					An R package for the surveillance of infectious diseases</a>, Computational Statistics (2007), 22(4), pp. 571-582. <a href="http://www.stat.uni-muenchen.de/~hoehle/pubs/hoehle-CoSt2008-preprint.pdf"> [preprint]</a></li>
<li>A more recent description can be found in the book chapter <i>Aberration detection in R illustrated by Danish mortality monitoring</i> (2010),  M. Höhle and A. Mazick,  To appear in T. Kass-Hout and  X. Zhang (Eds.) Biosurveillance: A Health Protection Priority, CRC Press. [<a href="http://www.stat.uni-muenchen.de/~hoehle/pubs/hoehle_mazick2009-preprint.pdf">preprint</a>].</li>
<li>An overview of statistical methods and implementational usage is given the course notes of the short course on <a href="http://www.stat.uni-muenchen.de/~hoehle/surv-short/index.html">Statistical surveillance of infectious diseases</a> held at the Department of Statistics, Universidade Federal de Minas Gerais (UFMG), Belo Horizonte, Brazil, Nov 27-28, 2008.</li>
<li><a href="hoehle-surveillance.pdf">Invited talk</a> held at the ESCAIDE satellite workshop on <ii>Computer supported outbreak detection and signal management</ii> (<a href="hoehle-surveillance.R">R-File</a>, <a href="ha.csv">Data</a> from SurvStat@RKI)
<li>Application of the package in veterinary public health surveillance is described in <a href="http://dx.doi.org/10.1016/j.prevetmed.2009.05.017">Statistical approaches to the surveillance of infectious diseases for veterinary public health</a> [<a href="http://epub.ub.uni-muenchen.de/2093/">preprint</a>].
<li>Read the package vignette
<li>Sometimes one picture says more than 1000 words:</li>
<img src="survlr.png" align="center">
</ul>
</blockquote>
</blockquote>

<hr><b>Developers:</b>
<blockquote>
<blockquote>
<ul>
<li><a href="http://www.stat.uni-muenchen.de/~hoehle">Michael H&ouml;hle</a>, Department of Statistics, University of Munich, Germany (Project Admin)</li>
<li><a href="http://www.biostat.uzh.ch/aboutus/people/mpaul.html">Michaela Paul</a>, Institute of Social and Preventive Medicine, University of Zurich, Switzerland</li>
     <li>Former student programmers: C. Lang, Andrea Riebler, Valentin Wimmer</li>
     <li>Contributions by: T. Correa, M. Hofmann and S. Steiner</li>
</ul>
</blockquote>
</blockquote>

<hr><b>Financial support:</b>
<blockquote>
<blockquote>
     The development of models and algorithms implemented in surveillance was financially supported by :
     <ul>
     <li><a href="http://www.en.mc-health.uni-muenchen.de/index.html">Munich Center of Health Sciences</a> (MC-Health, 2007-2010)</li>
     <li>Swiss National Science Foundation (SNF, since 2007)  </li>
     <li>German Science Foundation (DFG, 2003-2006)</li>
     </ul>
</blockquote>
</blockquote>
     

<!-- 
<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>
-->

</body>
</html>
