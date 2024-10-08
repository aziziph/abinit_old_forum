
.Version 7.0.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.0 computer) 

.Copyright (C) 1998-2012 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu 24 Jan 2013.
- ( at 19h48 )
  
- input  file    -> /home/letuan/abinit-7.0.5/tests/v3/Input/t87.in
- output file    -> t87.out
- root for input  files -> t87i
- root for output files -> t87o


 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         1  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        10  mffmem =         1
P  mgfft =        16   mkmem =         0 mpssoang=         3     mpw =       188
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.587 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.059 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
  mkmem==0 => use of 2 WF temporary disk files
================================================================================


 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         1  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        10  mffmem =         1
P  mgfft =        16   mkmem =         2 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.048 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================


 DATASET    3 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         1  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        10  mffmem =         1
P  mgfft =        16   mkmem =         2 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.048 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================


 DATASET    4 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         1  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        10  mffmem =         1
P  mgfft =        16   mkmem =         2 mpssoang=         3     mpw =       150
  mqgrid =      3001   natom =         2    nfft =      4096    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       1.596 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.048 Mbytes ; DEN or POT disk file :      0.033 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0250000000E+01  1.0250000000E+01  1.0250000000E+01 Bohr
              amu      2.80855000E+01
             awtr           0
             ecut1     6.00000000E+00 Hartree
             ecut2     5.07277704E+00 Hartree
             ecut3     5.07277704E+00 Hartree
             ecut4     5.07277704E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     1.50304505E+00 Hartree
          ecuteps3     1.50304505E+00 Hartree
          ecuteps4     1.50304505E+00 Hartree
          ecutwfn1     6.00000000E+00 Hartree
          ecutwfn2     5.07277704E+00 Hartree
          ecutwfn3     5.07277704E+00 Hartree
          ecutwfn4     5.07277704E+00 Hartree
           enunit           2
           getkss1          0
           getkss2          1
           getkss3          1
           getkss4          1
            intxc           1
             iscf           5
           jdtset        1    2    3    4
              kpt     -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        2   -2    2     -2    2    2     -2   -2    2
          kptrlen      2.05000000E+01
          kssform1          3
          kssform2          1
          kssform3          1
          kssform4          1
P           mkmem1          0
P           mkmem2          2
P           mkmem3          2
P           mkmem4          2
            natom           2
            nband          10
         nbandkss1         -1
         nbandkss2          0
         nbandkss3          0
         nbandkss4          0
           ndtset           4
            ngfft          16      16      16
             nkpt           2
            nline1          3
            nline2          4
            nline3          4
            nline4          4
           npweps          27
           npwwfn1          0
           npwwfn2        169
           npwwfn3        169
           npwwfn4        169
           nqptdm1       0
           nqptdm2       1
           nqptdm3       2
           nqptdm4       3
           nsheps1          0
           nsheps2          4
           nsheps3          4
           nsheps4          4
            nstep1         10
            nstep2         30
            nstep3         30
            nstep4         30
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          3
        optdriver4          3
           ppmfrq      6.06363869E-01 Hartree
            qptdm2     1.00000000E-05  2.00000000E-05  3.00000000E-05
            qptdm3    -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
            qptdm4     5.00000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00 -2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolwfr1     1.00000000E-16
           tolwfr2     0.00000000E+00
           tolwfr3     0.00000000E+00
           tolwfr4     0.00000000E+00
            typat      1  1
              wtk        0.75000    0.25000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3560165970E+00  1.3560165970E+00  1.3560165970E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5625000000E+00  2.5625000000E+00  2.5625000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1250000  5.1250000  G(1)= -0.0975610  0.0975610  0.0975610
 R(2)=  5.1250000  0.0000000  5.1250000  G(2)=  0.0975610 -0.0975610  0.0975610
 R(3)=  5.1250000  5.1250000  0.0000000  G(3)=  0.0975610  0.0975610 -0.0975610
 Unit cell volume ucvol=  2.6922266E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  16
         ecut(hartree)=      6.000   => boxcut(ratio)=   2.00203

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/letuan/abinit-7.0.5/tests/Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    /home/letuan/abinit-7.0.5/tests/Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     10 bands with npw=     188 for ikpt=   1 by node    0
P newkpt: treating     10 bands with npw=     187 for ikpt=   2 by node    0
 
 setup2: Arith. and geom. avg. npw (full set) are     187.750     187.749

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -8.8540936661522    -8.854E+00 1.017E-02 2.994E+00
 ETOT  2  -8.8589794906959    -4.886E-03 1.413E-04 1.327E-01
 ETOT  3  -8.8590989725402    -1.195E-04 2.516E-05 2.620E-02
 ETOT  4  -8.8591132967947    -1.432E-05 2.050E-06 3.489E-03
 ETOT  5  -8.8591154569180    -2.160E-06 3.951E-07 2.093E-04
 ETOT  6  -8.8591156670323    -2.101E-07 3.403E-08 2.736E-06
 ETOT  7  -8.8591156691205    -2.088E-09 6.537E-09 7.212E-09
 ETOT  8  -8.8591156691212    -6.430E-13 4.823E-10 8.107E-09
 ETOT  9  -8.8591156691245    -3.311E-12 9.718E-11 6.086E-10
 ETOT 10  -8.8591156691250    -4.619E-13 7.577E-12 2.219E-12

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.50962915E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  9.50962915E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  9.50962915E-05  sigma(2 1)=  0.00000000E+00
 

 scprqt:  WARNING -
  nstep=   10 was not enough SCF cycles to converge;
  maximum residual=  7.577E-12 exceeds tolwfr=  1.000E-16


======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)
 number of Gamma centered plane waves    307
 number of Gamma centered shells     18
 number of bands     10
 maximum angular momentum components      3
 Conjugate gradient eigenvalues
   k    eigenvalues [Hartree]
   1     -0.1252 -0.0203  0.0832  0.1331  0.2687  0.3780  0.4241  0.4345  0.5874
          0.6091
   2     -0.1964  0.0699  0.1874  0.1874  0.2859  0.3445  0.3445  0.4626  0.4857
          0.4857
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   4.0166E-13; max=  7.5767E-12
  -0.2500  0.5000  0.0000    1  7.57667E-12 kpt; spin; max resid(k); each band:
  6.80E-15 8.28E-15 1.91E-14 4.86E-15 1.95E-14 1.46E-14 1.03E-14 2.60E-15
  3.04E-13 7.58E-12
  -0.2500  0.0000  0.0000    1  2.44366E-14 kpt; spin; max resid(k); each band:
  7.01E-15 8.45E-15 9.30E-16 9.30E-16 1.14E-14 1.89E-15 1.89E-15 2.44E-14
  7.80E-15 2.13E-15
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.250000000000      0.250000000000      0.250000000000
 rms dE/dt=  3.0965E-30; max dE/dt=  2.1036E-30; dE/dt below (all hartree)
    1      -0.000000000000      0.000000000000     -0.000000000000
    2       0.000000000000     -0.000000000000     -0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.35601659701187     1.35601659701187     1.35601659701187

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 4.8855013E-31 6.1569632E-31   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000     0.00000000000000     0.00000000000000
    2      0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 2.5122256E-29 3.1660375E-29   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.250000000000 10.250000000000 10.250000000000 bohr
              =  5.424066388047  5.424066388047  5.424066388047 angstroms
 prteigrs : about to open file t87o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.18739   Average Vxc (hartree)=  -0.35276
 Eigenvalues (hartree) for nkpt=   2  k points:
 kpt#   1, nband= 10, wtk=  0.75000, kpt= -0.2500  0.5000  0.0000 (reduced coord)
  -0.12516  -0.02027   0.08318   0.13306   0.26870   0.37799   0.42406   0.43446
   0.58744   0.60913
 kpt#   2, nband= 10, wtk=  0.25000, kpt= -0.2500  0.0000  0.0000 (reduced coord)
  -0.19640   0.06989   0.18739   0.18739   0.28588   0.34447   0.34447   0.46259
   0.48565   0.48565
 Fermi (or HOMO) energy (eV) =   5.09904   Average Vxc (eV)=  -9.59911
 Eigenvalues (   eV  ) for nkpt=   2  k points:
 kpt#   1, nband= 10, wtk=  0.75000, kpt= -0.2500  0.5000  0.0000 (reduced coord)
  -3.40571  -0.55147   2.26334   3.62072   7.31179  10.28571  11.53938  11.82230
  15.98496  16.57535
 kpt#   2, nband= 10, wtk=  0.25000, kpt= -0.2500  0.0000  0.0000 (reduced coord)
  -5.34426   1.90172   5.09904   5.09904   7.77907   9.37350   9.37350  12.58769
  13.21529  13.21529
 Total charge density [el/Bohr^3]
,     Maximum=    8.6871E-02  at reduced coord.    0.1250    0.1250    0.6250
,Next maximum=    8.6871E-02  at reduced coord.    0.1250    0.6250    0.1250
,     Minimum=    3.1685E-03  at reduced coord.    0.5000    0.5000    0.5000
,Next minimum=    3.1685E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  3.01475596820205E+00
    Hartree energy  =  5.49241337665785E-01
    XC energy       = -3.53650871857409E+00
    Ewald energy    = -8.40866036158725E+00
    PspCore energy  =  8.52154029740039E-02
    Loc. psp. energy= -2.48150759670104E+00
    NL   psp  energy=  1.91834829889558E+00
    >>>>>>>>> Etotal= -8.85911566912496E+00

 Other information on the energy :
    Total energy(eV)= -2.41068797132700E+02 ; Band energy (Ha)=   2.3034826932E-01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  9.50962915E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  9.50962915E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  9.50962915E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -2.7978E+00 GPa]
- sigma(1 1)=  2.79782902E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.79782902E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.79782902E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1250000  5.1250000  G(1)= -0.0975610  0.0975610  0.0975610
 R(2)=  5.1250000  0.0000000  5.1250000  G(2)=  0.0975610 -0.0975610  0.0975610
 R(3)=  5.1250000  5.1250000  0.0000000  G(3)=  0.0975610  0.0975610 -0.0975610
 Unit cell volume ucvol=  2.6922266E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/letuan/abinit-7.0.5/tests/Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    /home/letuan/abinit-7.0.5/tests/Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)    -2.50000000E-01  5.00000000E-01  0.00000000E+00       0.75000
     2)    -2.50000000E-01  0.00000000E+00  0.00000000E+00       0.25000

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     6
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.03125
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.12500
     3)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.37500
     4)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.18750
     5)    -2.50000000E-01  5.00000000E-01  2.50000000E-01       0.18750
     6)     0.00000000E+00  5.00000000E-01  5.00000000E-01       0.09375

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  12x 12x 12
          total number of points  =     1728


 Dielectric matrix will be calculated only for some 
 selected q points provided by the user through the input variables 
 nqptdm and qptdm

 k       eigenvalues [eV]
  1         -3.41  -0.55   2.26   3.62   7.31  10.29  11.54  11.82  15.98  16.58

  2         -5.34   1.90   5.10   5.10   7.78   9.37   9.37  12.59  13.22  13.22


 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.998140
 max sum_G |a(n,k,G)| =  0.999938
 test on the orthogonalization of the wavefunctions (NB: this is not invariant for degenerate states)
- min sum_G a(n,k,G)a(n",k,G) =  0.000000
- max sum_G a(n,k,G)a(n",k,G) =  0.000487

 Number of electrons calculated from density =    7.9981; Expected =    8.0000
 average of density, n =  0.029708
 r_s =    2.0030
 omega_plasma =   16.6262 [eV]


 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.650000E+01


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000
       -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000

    2   0.000 -11.936  -0.000  -0.141   0.000  -0.141   0.000  -0.141  -0.000
       -0.000   0.000  -5.028  -0.000  -0.225  -0.000  -0.225  -0.000  -0.225

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000
       -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000

    2   0.000  -3.267  -0.000   0.073  -0.000   0.073   0.000   0.073  -0.000
       -0.000   0.000  -1.146   0.000  -0.063   0.000  -0.063   0.000  -0.063

 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =  23.1975
  dielectric constant without local fields =  24.7000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     17.83  [%]
  Heads and wings of the symmetrical epsilon^-1(G,G')

   Upper and lower wings at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
      0.043   0.004  -0.004  -0.011   0.011   0.011  -0.011  -0.004   0.004
      0.000   0.004   0.004  -0.011  -0.011   0.011   0.011  -0.004  -0.004
       1       2       3       4       5       6       7       8       9
      0.043   0.004  -0.004  -0.011   0.011   0.011  -0.011  -0.004   0.004
      0.000  -0.004  -0.004   0.011   0.011  -0.011  -0.011   0.004   0.004


   Upper and lower wings at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
      0.491   0.008  -0.008  -0.023   0.023   0.023  -0.023  -0.008   0.008
     -0.000   0.008   0.008  -0.023  -0.023   0.023   0.023  -0.008  -0.008
       1       2       3       4       5       6       7       8       9
      0.491   0.008  -0.008  -0.023   0.023   0.023  -0.023  -0.008   0.008
     -0.000  -0.008  -0.008   0.023   0.023  -0.023  -0.023   0.008   0.008



================================================================================
== DATASET  3 ==================================================================
-   nproc =    1

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1250000  5.1250000  G(1)= -0.0975610  0.0975610  0.0975610
 R(2)=  5.1250000  0.0000000  5.1250000  G(2)=  0.0975610 -0.0975610  0.0975610
 R(3)=  5.1250000  5.1250000  0.0000000  G(3)=  0.0975610  0.0975610 -0.0975610
 Unit cell volume ucvol=  2.6922266E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)    -2.50000000E-01  5.00000000E-01  0.00000000E+00       0.75000
     2)    -2.50000000E-01  0.00000000E+00  0.00000000E+00       0.25000

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     6
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.03125
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.12500
     3)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.37500
     4)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.18750
     5)    -2.50000000E-01  5.00000000E-01  2.50000000E-01       0.18750
     6)     0.00000000E+00  5.00000000E-01  5.00000000E-01       0.09375

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  12x 12x 12
          total number of points  =     1728


 Dielectric matrix will be calculated only for some 
 selected q points provided by the user through the input variables 
 nqptdm and qptdm

 k       eigenvalues [eV]
  1         -3.41  -0.55   2.26   3.62   7.31  10.29  11.54  11.82  15.98  16.58

  2         -5.34   1.90   5.10   5.10   7.78   9.37   9.37  12.59  13.22  13.22


 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.998140
 max sum_G |a(n,k,G)| =  0.999938
 test on the orthogonalization of the wavefunctions (NB: this is not invariant for degenerate states)
- min sum_G a(n,k,G)a(n",k,G) =  0.000000
- max sum_G a(n,k,G)a(n",k,G) =  0.000487

 Number of electrons calculated from density =    7.9981; Expected =    8.0000
 average of density, n =  0.029708
 r_s =    2.0030
 omega_plasma =   16.6262 [eV]


 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.650000E+01


--------------------------------------------------------------------------------
  q-point number  1        q = (-0.250000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -14.006   0.177  -2.094  -2.094   0.177  -2.242  -2.242  -2.242  -2.242
        0.000   0.177   2.094  -2.094  -0.177  -2.242   2.242  -2.242   2.242

    2   0.177 -14.808  -0.000  -0.156  -0.000   0.850   0.000   0.850   0.000
       -0.177   0.000  -3.241  -0.000  -1.772  -0.000  -0.040   0.000  -0.040

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -2.199   0.175  -0.475  -0.475   0.175  -0.384  -0.384  -0.384  -0.384
        0.000   0.175   0.475  -0.475  -0.175  -0.384   0.384  -0.384   0.384

    2   0.175  -3.403   0.000   0.033  -0.000   0.111   0.000   0.111   0.000
       -0.175   0.000  -0.838  -0.000  -0.196  -0.000  -0.079  -0.000  -0.079

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     47.56  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.000000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -15.259  -1.450  -2.144  -2.144  -1.450  -1.450  -2.144  -2.144  -1.450
       -0.000  -1.450   2.144  -2.144   1.450  -1.450   2.144  -2.144   1.450

    2  -1.450 -13.836   0.000  -0.011   0.000   3.405   0.000  -0.011  -0.000
        1.450  -0.000  -1.973   0.000  -0.000   0.000  -0.135   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -3.193  -0.303  -0.528  -0.528  -0.303  -0.303  -0.528  -0.528  -0.303
        0.000  -0.303   0.528  -0.528   0.303  -0.303   0.528  -0.528   0.303

    2  -0.303  -3.399   0.000   0.016  -0.000   0.386  -0.000   0.016   0.000
        0.303  -0.000  -0.520  -0.000  -0.000  -0.000  -0.014  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     39.54  [%]

================================================================================
== DATASET  4 ==================================================================
-   nproc =    1

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1250000  5.1250000  G(1)= -0.0975610  0.0975610  0.0975610
 R(2)=  5.1250000  0.0000000  5.1250000  G(2)=  0.0975610 -0.0975610  0.0975610
 R(3)=  5.1250000  5.1250000  0.0000000  G(3)=  0.0975610  0.0975610 -0.0975610
 Unit cell volume ucvol=  2.6922266E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :     2
 Reduced coordinates and weights :

     1)    -2.50000000E-01  5.00000000E-01  0.00000000E+00       0.75000
     2)    -2.50000000E-01  0.00000000E+00  0.00000000E+00       0.25000

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :     6
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.03125
     2)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.12500
     3)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.37500
     4)    -2.50000000E-01  0.00000000E+00 -2.50000000E-01       0.18750
     5)    -2.50000000E-01  5.00000000E-01  2.50000000E-01       0.18750
     6)     0.00000000E+00  5.00000000E-01  5.00000000E-01       0.09375

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    32 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  12x 12x 12
          total number of points  =     1728


 Dielectric matrix will be calculated only for some 
 selected q points provided by the user through the input variables 
 nqptdm and qptdm

 k       eigenvalues [eV]
  1         -3.41  -0.55   2.26   3.62   7.31  10.29  11.54  11.82  15.98  16.58

  2         -5.34   1.90   5.10   5.10   7.78   9.37   9.37  12.59  13.22  13.22


 test on the normalization of the wavefunctions
 min sum_G |a(n,k,G)| =  0.998140
 max sum_G |a(n,k,G)| =  0.999938
 test on the orthogonalization of the wavefunctions (NB: this is not invariant for degenerate states)
- min sum_G a(n,k,G)a(n",k,G) =  0.000000
- max sum_G a(n,k,G)a(n",k,G) =  0.000487

 Number of electrons calculated from density =    7.9981; Expected =    8.0000
 average of density, n =  0.029708
 r_s =    2.0030
 omega_plasma =   16.6262 [eV]


 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.650000E+01


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -13.117  -1.674   2.921  -1.948  -2.123  -1.948  -2.123  -1.948  -2.123
        0.000  -1.674  -2.921  -1.948   2.123  -1.948   2.123  -1.948   2.123

    2  -1.674  -7.358  -0.000   0.247   0.000   0.247   0.000   0.247   0.000
        1.674  -0.000  -3.856  -0.000   0.226   0.000   0.226  -0.000   0.226

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -2.830  -0.535   0.556  -0.375  -0.497  -0.375  -0.497  -0.375  -0.497
        0.000  -0.535  -0.556  -0.375   0.497  -0.375   0.497  -0.375   0.497

    2  -0.535  -1.888  -0.000   0.074   0.000   0.074   0.000   0.074   0.000
        0.535  -0.000  -0.834   0.000   0.001  -0.000   0.001   0.000   0.001

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     45.86  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = (-0.250000, 0.000000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -10.826  -0.278  -2.141  -0.278  -2.141  -2.141  -0.278  -2.141  -0.278
        0.000  -0.278   2.141  -0.278   2.141  -2.141   0.278  -2.141   0.278

    2  -0.278 -13.485   0.000   2.418   0.000  -0.394   0.000  -0.394   0.000
        0.278   0.000  -3.435   0.000  -0.216  -0.000  -0.359  -0.000  -0.359

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -1.345   0.022  -0.361   0.022  -0.361  -0.361   0.022  -0.361   0.022
        0.000   0.022   0.361   0.022   0.361  -0.361  -0.022  -0.361  -0.022

    2   0.022  -3.376  -0.000   0.270  -0.000   0.023  -0.000   0.023  -0.000
       -0.022   0.000  -0.925   0.000  -0.029  -0.000  -0.119  -0.000  -0.119

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :     61.73  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = (-0.250000, 0.500000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -16.040  -1.582  -2.023  -2.318  -2.093  -2.093  -2.318  -2.023  -1.582
        0.000  -1.582   2.023  -2.318   2.093  -2.093   2.318  -2.023   1.582

    2  -1.582 -16.040   0.000  -0.099   0.000   1.854   0.000  -0.240   0.000
        1.582   0.000  -2.310  -0.000   0.000   0.000   0.109   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.5000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -3.309  -0.170  -0.504  -0.528  -0.482  -0.482  -0.528  -0.504  -0.170
        0.000  -0.170   0.504  -0.528   0.482  -0.482   0.528  -0.504   0.170

    2  -0.170  -3.309  -0.000  -0.063  -0.000   0.175  -0.000   0.028  -0.000
        0.170  -0.000  -0.470   0.000   0.000  -0.000  -0.033  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     38.47  [%]

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0250000000E+01  1.0250000000E+01  1.0250000000E+01 Bohr
              amu      2.80855000E+01
             awtr           0
             ecut1     6.00000000E+00 Hartree
             ecut2     5.07277704E+00 Hartree
             ecut3     5.07277704E+00 Hartree
             ecut4     5.07277704E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     1.50304505E+00 Hartree
          ecuteps3     1.50304505E+00 Hartree
          ecuteps4     1.50304505E+00 Hartree
          ecutwfn1     6.00000000E+00 Hartree
          ecutwfn2     5.07277704E+00 Hartree
          ecutwfn3     5.07277704E+00 Hartree
          ecutwfn4     5.07277704E+00 Hartree
           enunit           2
           etotal1    -8.8591156691E+00
           etotal2     0.0000000000E+00
           etotal3     0.0000000000E+00
           etotal4     0.0000000000E+00
            fcart1    -6.1569631627E-31  4.1046421085E-31  4.1046421085E-31
                       6.1569631627E-31 -4.1046421085E-31 -4.1046421085E-31
            fcart2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           getkss1          0
           getkss2          1
           getkss3          1
           getkss4          1
            intxc           1
             iscf           5
           jdtset        1    2    3    4
              kpt     -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        2   -2    2     -2    2    2     -2   -2    2
          kptrlen      2.05000000E+01
          kssform1          3
          kssform2          1
          kssform3          1
          kssform4          1
P           mkmem1          0
P           mkmem2          2
P           mkmem3          2
P           mkmem4          2
            natom           2
            nband          10
         nbandkss1         -1
         nbandkss2          0
         nbandkss3          0
         nbandkss4          0
           ndtset           4
            ngfft          16      16      16
             nkpt           2
            nline1          3
            nline2          4
            nline3          4
            nline4          4
           npweps          27
           npwwfn1          0
           npwwfn2        169
           npwwfn3        169
           npwwfn4        169
           nqptdm1       0
           nqptdm2       1
           nqptdm3       2
           nqptdm4       3
           nsheps1          0
           nsheps2          4
           nsheps3          4
           nsheps4          4
            nstep1         10
            nstep2         30
            nstep3         30
            nstep4         30
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          3
        optdriver4          3
           ppmfrq      6.06363869E-01 Hartree
            qptdm2     1.00000000E-05  2.00000000E-05  3.00000000E-05
            qptdm3    -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
            qptdm4     5.00000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00 -2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
           strten1     9.5096291460E-05  9.5096291460E-05  9.5096291460E-05
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolwfr1     1.00000000E-16
           tolwfr2     0.00000000E+00
           tolwfr3     0.00000000E+00
           tolwfr4     0.00000000E+00
            typat      1  1
              wtk        0.75000    0.25000
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3560165970E+00  1.3560165970E+00  1.3560165970E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5625000000E+00  2.5625000000E+00  2.5625000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================


- Timing analysis has been suppressed with timopt=0



================================================================================

 Suggested references for the acknowledgment of ABINIT usage.

 The users of ABINIT have little formal obligations with respect to the ABINIT group
 (those specified in the GNU General Public License, http://www.gnu.org/copyleft/gpl.txt).
 However, it is common practice in the scientific literature,
 to acknowledge the efforts of people that have made the research possible.
 In this spirit, please find below suggested citations of work written by ABINIT developers,
 corresponding to implementations inside of ABINIT that you have used in the present run.
 Note also that it will be of great value to readers of publications presenting these results,
 to read papers enabling them to understand the theoretical formalism and details
 of the ABINIT implementation.
 For information on why they are suggested, see also http://www.abinit.org/about/?text=acknowledgments.

 [1] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
 The licence allows the authors to put it on the Web.

 [2] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited especially if you are using the GW part of ABINIT, as several authors
 of this part are not in the list of authors of the first or third paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).


 And optionally :

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).

 [5] Towards a potential-based conjugate gradient algorithm for order-N self-consistent
 total energy calculations.
 X. Gonze, Phys. Rev. B 54, 4383 (1996).
 Comment : The potential-based conjugate-gradient algorithm, used when iscf=5, is not published.
 However, many elements of this algorithm have been explained in the paper above.
-
- Proc.   0 individual time (sec): cpu=          3.2  wall=          3.3

================================================================================

 Calculation completed.
.Delivered   23 WARNINGs and  17 COMMENTs to log file.
+Overall time at end (sec) : cpu=          3.2  wall=          3.3
