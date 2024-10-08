
.Version 7.6.4 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu4.4 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Tue 24 Jun 2014.
- ( at 09h59 )
  
- input  file    -> tbasepar_1.in
- output file    -> tbasepar_1.outF
- root for input  files -> tbasepar_1i
- root for output files -> tbasepar_1o


 Symmetries : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         6   lnmax =         6   mband =         4  mffmem =         1
P  mgfft =        36   mkmem =        60 mpssoang=         3     mpw =      1977
  mqgrid =      3001   natom =         1    nfft =     46656    nkpt =        60
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         1  occopt =         7
================================================================================
P This job should need less than                      21.103 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      7.242 Mbytes ; DEN or POT disk file :      0.358 Mbytes.
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
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      2.07200000E+02
             ecut      3.00000000E+01 Hartree
             iscf           5
              kpt     -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                      -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                      -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                      -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                      -6.25000000E-02  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01 -4.37500000E-01  0.00000000E+00
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.12500000E-01  0.00000000E+00
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.25000000E-01 -3.12500000E-01  1.25000000E-01
                      -6.25000000E-02 -3.12500000E-01  1.87500000E-01
                      -6.25000000E-02  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  4.37500000E-01  0.00000000E+00
                      -1.87500000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  0.00000000E+00
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.25000000E-01 -4.37500000E-01  1.25000000E-01
                      -6.25000000E-02 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.87500000E-01
                      -6.25000000E-02 -3.75000000E-01  2.50000000E-01
                      -6.25000000E-02  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.12500000E-01  0.00000000E+00
                      -1.87500000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  4.37500000E-01  0.00000000E+00
                      -3.12500000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.87500000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01 -4.37500000E-01  0.00000000E+00
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  1.25000000E-01
                      -1.87500000E-01 -4.37500000E-01  1.87500000E-01
                      -1.25000000E-01 -4.37500000E-01  2.50000000E-01
                      -6.25000000E-02 -4.37500000E-01  3.12500000E-01
                      -6.25000000E-02  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.87500000E-01  0.00000000E+00
                      -1.87500000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.12500000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt        8   -8    8     -8    8    8     -8   -8    8
          kptrlen      8.00000000E+01
P           mkmem          60
            natom           1
            nband           4
            ngfft          36      36      36
             nkpt          60
            nstep           3
             nsym          48
           ntypat           1
              occ      2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           7
        optforces           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
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
           tolvrs      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1
              wtk        0.01172    0.01172    0.01172    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.01172    0.01172    0.01172    0.02344
                         0.01172    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.02344    0.01172    0.01172
                         0.01172    0.01172
                       outvars : Printing only first  50 k-points.
            znucl       82.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.0000000  5.0000000  G(1)= -0.1000000  0.1000000  0.1000000
 R(2)=  5.0000000  0.0000000  5.0000000  G(2)=  0.1000000 -0.1000000  0.1000000
 R(3)=  5.0000000  5.0000000  0.0000000  G(3)=  0.1000000  0.1000000 -0.1000000
 Unit cell volume ucvol=  2.5000000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.06487

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/HGH/82pb.4.hgh
- pspatm: opening atomic psp file    ../../../Psps_for_tests/HGH/82pb.4.hgh
- Hartwigsen-Goedecker-Hutter psp for Pb,  from PRB58, 3641 (1998)
- 82.00000   4.00000     10605                znucl, zion, pspdat
    3    1    2    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.6175000
 cc1 =   0.7531430; cc2 =   0.0000000; cc3 =   0.0000000; cc4 =   0.0000000
 rrs =   0.7052590; h11s=   1.9799270; h22s=  -0.1649600; h33s=  -0.8060600
 rrp =   0.8466410; h11p=   0.8644200; h22p=  -0.5409690; h33p=   0.0000000
                    k11p=   0.2077110; k22p=   0.0129480; k33p=   0.0000000
 rrd =   0.9719390; h11d=   0.3749670; h22d=   0.0000000; h33d=   0.0000000
                    k11d=   0.0292560; k22d=   0.0000000; k33d=   0.0000000
-  Local part computed in reciprocal space.

 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=   12.37618897
         --- l  ekb(1:nproj) -->
             0   -1.367110    0.141978    2.479722
             1   -1.780211    2.777773
             2    4.356433
 pspatm: atomic psp has been read  and splines computed

   4.95047559E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating      4 bands with npw=    1973 for ikpt=   1 by node    0
P newkpt: treating      4 bands with npw=    1961 for ikpt=   2 by node    0
P newkpt: treating      4 bands with npw=    1970 for ikpt=   3 by node    0
P newkpt: treating      4 bands with npw=    1962 for ikpt=   4 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=   5 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=   6 by node    0
P newkpt: treating      4 bands with npw=    1965 for ikpt=   7 by node    0
P newkpt: treating      4 bands with npw=    1973 for ikpt=   8 by node    0
P newkpt: treating      4 bands with npw=    1966 for ikpt=   9 by node    0
P newkpt: treating      4 bands with npw=    1963 for ikpt=  10 by node    0
P newkpt: treating      4 bands with npw=    1961 for ikpt=  11 by node    0
P newkpt: treating      4 bands with npw=    1956 for ikpt=  12 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  13 by node    0
P newkpt: treating      4 bands with npw=    1970 for ikpt=  14 by node    0
P newkpt: treating      4 bands with npw=    1964 for ikpt=  15 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  16 by node    0
P newkpt: treating      4 bands with npw=    1977 for ikpt=  17 by node    0
P newkpt: treating      4 bands with npw=    1968 for ikpt=  18 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  19 by node    0
P newkpt: treating      4 bands with npw=    1962 for ikpt=  20 by node    0
P newkpt: treating      4 bands with npw=    1964 for ikpt=  21 by node    0
P newkpt: treating      4 bands with npw=    1971 for ikpt=  22 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=  23 by node    0
P newkpt: treating      4 bands with npw=    1963 for ikpt=  24 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=  25 by node    0
P newkpt: treating      4 bands with npw=    1961 for ikpt=  26 by node    0
P newkpt: treating      4 bands with npw=    1962 for ikpt=  27 by node    0
P newkpt: treating      4 bands with npw=    1965 for ikpt=  28 by node    0
P newkpt: treating      4 bands with npw=    1968 for ikpt=  29 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  30 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=  31 by node    0
P newkpt: treating      4 bands with npw=    1963 for ikpt=  32 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=  33 by node    0
P newkpt: treating      4 bands with npw=    1961 for ikpt=  34 by node    0
P newkpt: treating      4 bands with npw=    1962 for ikpt=  35 by node    0
P newkpt: treating      4 bands with npw=    1974 for ikpt=  36 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  37 by node    0
P newkpt: treating      4 bands with npw=    1963 for ikpt=  38 by node    0
P newkpt: treating      4 bands with npw=    1964 for ikpt=  39 by node    0
P newkpt: treating      4 bands with npw=    1958 for ikpt=  40 by node    0
P newkpt: treating      4 bands with npw=    1977 for ikpt=  41 by node    0
P newkpt: treating      4 bands with npw=    1969 for ikpt=  42 by node    0
P newkpt: treating      4 bands with npw=    1962 for ikpt=  43 by node    0
P newkpt: treating      4 bands with npw=    1955 for ikpt=  44 by node    0
P newkpt: treating      4 bands with npw=    1951 for ikpt=  45 by node    0
P newkpt: treating      4 bands with npw=    1948 for ikpt=  46 by node    0
P newkpt: treating      4 bands with npw=    1963 for ikpt=  47 by node    0
P newkpt: treating      4 bands with npw=    1960 for ikpt=  48 by node    0
P newkpt: treating      4 bands with npw=    1959 for ikpt=  49 by node    0
P newkpt: treating      4 bands with npw=    1957 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.

_setup2: Arith. and geom. avg. npw (full set) are    1962.059    1962.049

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -3.6407355151444    -3.641E+00 1.514E-02 6.696E+00 0.000E+00 0.000E+00
 ETOT  2  -3.6436120615457    -2.877E-03 9.175E-08 2.364E-01 0.000E+00 0.000E+00
 ETOT  3  -3.6436269005939    -1.484E-05 9.971E-07 8.615E-02 0.000E+00 0.000E+00

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.46612070E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.46612070E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.46612070E-04  sigma(2 1)=  0.00000000E+00


 scprqt:  WARNING -
  nstep=    3 was not enough SCF cycles to converge;
  potential residual=  8.615E-02 exceeds tolvrs=  1.000E-10

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.7526E-07; max=  9.9709E-07
  -0.0625 -0.1250  0.0000    1  6.54881E-07 kpt; spin; max resid(k); each band:
  6.55E-07 5.65E-07 1.36E-08 1.04E-07
  -0.0625 -0.2500  0.0000    1  7.24771E-07 kpt; spin; max resid(k); each band:
  7.25E-07 6.10E-07 6.87E-09 1.79E-07
  -0.1250 -0.1875  0.0000    1  8.96604E-07 kpt; spin; max resid(k); each band:
  8.97E-07 7.72E-07 4.73E-09 1.71E-07
  -0.0625 -0.1875  0.0625    1  8.05463E-07 kpt; spin; max resid(k); each band:
  8.05E-07 7.02E-07 8.26E-08 9.40E-08
  -0.0625 -0.3750  0.0000    1  5.90416E-07 kpt; spin; max resid(k); each band:
  5.90E-07 4.26E-07 6.64E-09 1.99E-07
  -0.1250 -0.3125  0.0000    1  8.64213E-07 kpt; spin; max resid(k); each band:
  8.64E-07 6.61E-07 3.73E-09 3.25E-07
  -0.0625 -0.3125  0.0625    1  7.42438E-07 kpt; spin; max resid(k); each band:
  7.42E-07 5.58E-07 2.06E-07 7.65E-08
  -0.1875 -0.2500  0.0000    1  9.97085E-07 kpt; spin; max resid(k); each band:
  9.97E-07 9.05E-07 3.60E-09 1.50E-07
  -0.1250 -0.2500  0.0625    1  9.20677E-07 kpt; spin; max resid(k); each band:
  9.21E-07 7.88E-07 8.61E-08 1.62E-07
  -0.0625 -0.2500  0.1250    1  8.03238E-07 kpt; spin; max resid(k); each band:
  8.03E-07 7.10E-07 9.16E-08 6.25E-08
  -0.0625  0.5000  0.0000    1  2.43576E-07 kpt; spin; max resid(k); each band:
  2.44E-07 2.19E-08 1.83E-07 7.13E-09
  -0.1250 -0.4375  0.0000    1  6.29455E-07 kpt; spin; max resid(k); each band:
  6.29E-07 3.27E-07 3.52E-07 3.87E-09
  -0.0625 -0.4375  0.0625    1  4.55175E-07 kpt; spin; max resid(k); each band:
  4.55E-07 1.52E-07 2.92E-07 5.17E-08
  -0.1875 -0.3750  0.0000    1  8.75185E-07 kpt; spin; max resid(k); each band:
  8.75E-07 6.56E-07 3.11E-07 3.32E-09
  -0.1250 -0.3750  0.0625    1  7.57705E-07 kpt; spin; max resid(k); each band:
  7.58E-07 5.03E-07 2.85E-07 7.99E-08
  -0.0625 -0.3750  0.1250    1  6.08951E-07 kpt; spin; max resid(k); each band:
  6.09E-07 3.35E-07 2.77E-07 3.29E-08
  -0.2500 -0.3125  0.0000    1  9.38403E-07 kpt; spin; max resid(k); each band:
  9.38E-07 9.22E-07 6.09E-08 3.18E-09
  -0.1875 -0.3125  0.0625    1  9.25374E-07 kpt; spin; max resid(k); each band:
  9.25E-07 8.14E-07 7.91E-08 9.22E-08
  -0.1250 -0.3125  0.1250    1  8.11832E-07 kpt; spin; max resid(k); each band:
  8.12E-07 6.95E-07 9.40E-08 1.11E-07
  -0.0625 -0.3125  0.1875    1  6.78566E-07 kpt; spin; max resid(k); each band:
  6.79E-07 5.54E-07 1.07E-07 4.15E-08
  -0.0625  0.3750  0.0000    1  4.56706E-07 kpt; spin; max resid(k); each band:
  4.57E-07 2.95E-07 1.57E-07 4.75E-09
  -0.1250  0.4375  0.0000    1  3.66423E-07 kpt; spin; max resid(k); each band:
  3.66E-07 2.22E-08 3.08E-07 5.89E-09
  -0.1875  0.5000  0.0000    1  5.12844E-07 kpt; spin; max resid(k); each band:
  5.13E-07 1.65E-07 3.35E-07 3.24E-09
  -0.1250  0.5000  0.0625    1  4.06486E-07 kpt; spin; max resid(k); each band:
  4.06E-07 2.35E-08 3.51E-07 3.24E-08
  -0.2500 -0.4375  0.0000    1  6.86896E-07 kpt; spin; max resid(k); each band:
  6.87E-07 5.78E-07 1.77E-07 3.12E-09
  -0.1875 -0.4375  0.0625    1  6.33208E-07 kpt; spin; max resid(k); each band:
  6.33E-07 3.73E-07 2.82E-07 2.50E-08
  -0.1250 -0.4375  0.1250    1  4.89105E-07 kpt; spin; max resid(k); each band:
  4.89E-07 1.67E-07 3.07E-07 3.12E-08
  -0.0625 -0.4375  0.1875    1  3.63034E-07 kpt; spin; max resid(k); each band:
  3.63E-07 2.26E-08 2.89E-07 4.42E-08
  -0.3125 -0.3750  0.0000    1  7.99142E-07 kpt; spin; max resid(k); each band:
  7.94E-07 7.99E-07 1.67E-08 2.95E-09
  -0.2500 -0.3750  0.0625    1  8.07879E-07 kpt; spin; max resid(k); each band:
  8.08E-07 7.34E-07 3.73E-08 2.64E-08
  -0.1875 -0.3750  0.1250    1  6.96502E-07 kpt; spin; max resid(k); each band:
  6.97E-07 5.98E-07 7.82E-08 3.74E-08
  -0.1250 -0.3750  0.1875    1  5.45122E-07 kpt; spin; max resid(k); each band:
  5.45E-07 4.03E-07 1.07E-07 5.66E-08
  -0.0625 -0.3750  0.2500    1  3.59159E-07 kpt; spin; max resid(k); each band:
  3.59E-07 1.80E-07 1.25E-07 5.52E-08
  -0.0625  0.2500  0.0000    1  6.54033E-07 kpt; spin; max resid(k); each band:
  6.54E-07 5.65E-07 1.20E-07 7.92E-09
  -0.1250  0.3125  0.0000    1  6.50340E-07 kpt; spin; max resid(k); each band:
  6.50E-07 4.56E-07 2.37E-07 9.56E-09
  -0.1875  0.3750  0.0000    1  4.63957E-07 kpt; spin; max resid(k); each band:
  4.64E-07 1.56E-07 2.83E-07 4.28E-09
  -0.2500  0.4375  0.0000    1  3.20183E-07 kpt; spin; max resid(k); each band:
  3.20E-07 2.63E-08 2.46E-07 3.22E-09
  -0.3125  0.5000  0.0000    1  4.64593E-07 kpt; spin; max resid(k); each band:
  4.65E-07 3.74E-07 4.12E-08 2.93E-09
  -0.2500  0.5000  0.0625    1  3.79738E-07 kpt; spin; max resid(k); each band:
  3.80E-07 1.85E-07 1.59E-07 3.04E-08
  -0.1875  0.5000  0.1250    1  3.14979E-07 kpt; spin; max resid(k); each band:
  3.15E-07 2.61E-08 2.54E-07 1.17E-08
  -0.3750 -0.4375  0.0000    1  5.04747E-07 kpt; spin; max resid(k); each band:
  5.05E-07 5.05E-07 1.66E-08 2.92E-09
  -0.3125 -0.4375  0.0625    1  5.34277E-07 kpt; spin; max resid(k); each band:
  5.34E-07 4.71E-07 4.49E-09 2.54E-08
  -0.2500 -0.4375  0.1250    1  4.36557E-07 kpt; spin; max resid(k); each band:
  4.37E-07 3.72E-07 3.08E-08 7.56E-09
  -0.1875 -0.4375  0.1875    1  3.09116E-07 kpt; spin; max resid(k); each band:
  3.09E-07 1.93E-07 8.39E-08 1.32E-08
  -0.1250 -0.4375  0.2500    1  1.97263E-07 kpt; spin; max resid(k); each band:
  1.97E-07 2.13E-08 1.14E-07 3.57E-08
  -0.0625 -0.4375  0.3125    1  1.32758E-07 kpt; spin; max resid(k); each band:
  1.33E-07 2.66E-08 3.95E-08 4.06E-08
  -0.0625  0.1250  0.0000    1  6.47022E-07 kpt; spin; max resid(k); each band:
  6.47E-07 6.05E-07 4.43E-08 1.59E-08
  -0.1250  0.1875  0.0000    1  7.43481E-07 kpt; spin; max resid(k); each band:
  7.43E-07 6.92E-07 8.51E-08 1.16E-08
  -0.1875  0.2500  0.0000    1  7.23763E-07 kpt; spin; max resid(k); each band:
  7.24E-07 6.37E-07 1.00E-07 1.17E-08
  -0.2500  0.3125  0.0000    1  5.22071E-07 kpt; spin; max resid(k); each band:
  5.22E-07 3.77E-07 1.17E-07 3.88E-09
 outwf : prtvol=0 or 1, do not print more k-points.

 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.000000000000 10.000000000000 10.000000000000 bohr
              =  5.291772085900  5.291772085900  5.291772085900 angstroms
 prteigrs : about to open file tbasepar_1o_EIG
 Fermi (or HOMO) energy (hartree) =   0.08245   Average Vxc (hartree)=  -0.28613
 Eigenvalues (hartree) for nkpt=  60  k points:
 kpt#   1, nband=  4, wtk=  0.01172, kpt= -0.0625 -0.1250  0.0000 (reduced coord)
  -0.29885   0.22991   0.27363   0.28206
      occupation numbers for kpt#   1
   2.00000   0.00000   0.00000   0.00000
 kpt#   2, nband=  4, wtk=  0.01172, kpt= -0.0625 -0.2500  0.0000 (reduced coord)
  -0.27637   0.11725   0.25205   0.26540
      occupation numbers for kpt#   2
   2.00000   0.00000   0.00000   0.00000
 kpt#   3, nband=  4, wtk=  0.01172, kpt= -0.1250 -0.1875  0.0000 (reduced coord)
  -0.28739   0.18763   0.24568   0.25177
      occupation numbers for kpt#   3
   2.00000   0.00000   0.00000   0.00000
 kpt#   4, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.1875  0.0625 (reduced coord)
  -0.28182   0.15224   0.22489   0.27650
      occupation numbers for kpt#   4
   2.00000   0.00000   0.00000   0.00000
 kpt#   5, nband=  4, wtk=  0.01172, kpt= -0.0625 -0.3750  0.0000 (reduced coord)
  -0.24141   0.01835   0.23972   0.24306
      occupation numbers for kpt#   5
   2.00000   2.00000   0.00000   0.00000
 kpt#   6, nband=  4, wtk=  0.01172, kpt= -0.1250 -0.3125  0.0000 (reduced coord)
  -0.26016   0.08387   0.22611   0.22747
      occupation numbers for kpt#   6
   2.00000   0.84090   0.00000   0.00000
 kpt#   7, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.3125  0.0625 (reduced coord)
  -0.25029   0.05086   0.20309   0.25379
      occupation numbers for kpt#   7
   2.00000   1.99999   0.00000   0.00000
 kpt#   8, nband=  4, wtk=  0.01172, kpt= -0.1875 -0.2500  0.0000 (reduced coord)
  -0.27053   0.14471   0.21726   0.21742
      occupation numbers for kpt#   8
   2.00000   0.00000   0.00000   0.00000
 kpt#   9, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.2500  0.0625 (reduced coord)
  -0.26525   0.11556   0.19455   0.24115
      occupation numbers for kpt#   9
   2.00000   0.00000   0.00000   0.00000
 kpt#  10, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.2500  0.1250 (reduced coord)
  -0.25497   0.08363   0.16400   0.25950
      occupation numbers for kpt#  10
   2.00000   0.86792   0.00000   0.00000
 kpt#  11, nband=  4, wtk=  0.01172, kpt= -0.0625  0.5000  0.0000 (reduced coord)
  -0.21348  -0.03612   0.22698   0.24048
      occupation numbers for kpt#  11
   2.00000   2.00000   0.00000   0.00000
 kpt#  12, nband=  4, wtk=  0.01172, kpt= -0.1250 -0.4375  0.0000 (reduced coord)
  -0.22448  -0.00133   0.19885   0.22130
      occupation numbers for kpt#  12
   2.00000   2.00000   0.00000   0.00000
 kpt#  13, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.4375  0.0625 (reduced coord)
  -0.21631  -0.02148   0.19616   0.23401
      occupation numbers for kpt#  13
   2.00000   2.00000   0.00000   0.00000
 kpt#  14, nband=  4, wtk=  0.01172, kpt= -0.1875 -0.3750  0.0000 (reduced coord)
  -0.23967   0.05583   0.18101   0.20281
      occupation numbers for kpt#  14
   2.00000   1.99983   0.00000   0.00000
 kpt#  15, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.3750  0.0625 (reduced coord)
  -0.23125   0.02742   0.17115   0.21707
      occupation numbers for kpt#  15
   2.00000   2.00000   0.00000   0.00000
 kpt#  16, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.3750  0.1250 (reduced coord)
  -0.21998   0.00478   0.15007   0.22935
      occupation numbers for kpt#  16
   2.00000   2.00000   0.00000   0.00000
 kpt#  17, nband=  4, wtk=  0.01172, kpt= -0.2500 -0.3125  0.0000 (reduced coord)
  -0.24889   0.10116   0.18596   0.19220
      occupation numbers for kpt#  17
   2.00000   0.00817   0.00000   0.00000
 kpt#  18, nband=  4, wtk=  0.02344, kpt= -0.1875 -0.3125  0.0625 (reduced coord)
  -0.24413   0.08157   0.16632   0.20220
      occupation numbers for kpt#  18
   2.00000   1.09935   0.00000   0.00000
 kpt#  19, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.3125  0.1250 (reduced coord)
  -0.23501   0.05680   0.13715   0.21572
      occupation numbers for kpt#  19
   2.00000   1.99971   0.00000   0.00000
 kpt#  20, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.3125  0.1875 (reduced coord)
  -0.22239   0.03520   0.10822   0.22656
      occupation numbers for kpt#  20
   2.00000   2.00000   0.00027   0.00000
 kpt#  21, nband=  4, wtk=  0.01172, kpt= -0.0625  0.3750  0.0000 (reduced coord)
  -0.22942  -0.00681   0.22253   0.25375
      occupation numbers for kpt#  21
   2.00000   2.00000   0.00000   0.00000
 kpt#  22, nband=  4, wtk=  0.01172, kpt= -0.1250  0.4375  0.0000 (reduced coord)
  -0.20909  -0.02933   0.17980   0.23255
      occupation numbers for kpt#  22
   2.00000   2.00000   0.00000   0.00000
 kpt#  23, nband=  4, wtk=  0.01172, kpt= -0.1875  0.5000  0.0000 (reduced coord)
  -0.20731  -0.00984   0.14673   0.20591
      occupation numbers for kpt#  23
   2.00000   2.00000   0.00000   0.00000
 kpt#  24, nband=  4, wtk=  0.02344, kpt= -0.1250  0.5000  0.0625 (reduced coord)
  -0.20481  -0.02286   0.15624   0.21112
      occupation numbers for kpt#  24
   2.00000   2.00000   0.00000   0.00000
 kpt#  25, nband=  4, wtk=  0.01172, kpt= -0.2500 -0.4375  0.0000 (reduced coord)
  -0.21660   0.03329   0.13515   0.18417
      occupation numbers for kpt#  25
   2.00000   2.00000   0.00000   0.00000
 kpt#  26, nband=  4, wtk=  0.02344, kpt= -0.1875 -0.4375  0.0625 (reduced coord)
  -0.21060   0.01272   0.13187   0.18693
      occupation numbers for kpt#  26
   2.00000   2.00000   0.00000   0.00000
 kpt#  27, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.4375  0.1250 (reduced coord)
  -0.20345  -0.00313   0.12272   0.18966
      occupation numbers for kpt#  27
   2.00000   2.00000   0.00000   0.00000
 kpt#  28, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.4375  0.1875 (reduced coord)
  -0.19718  -0.00939   0.10840   0.19726
      occupation numbers for kpt#  28
   2.00000   2.00000   0.00024   0.00000
 kpt#  29, nband=  4, wtk=  0.01172, kpt= -0.3125 -0.3750  0.0000 (reduced coord)
  -0.22383   0.05778   0.16100   0.17235
      occupation numbers for kpt#  29
   2.00000   1.99951   0.00000   0.00000
 kpt#  30, nband=  4, wtk=  0.02344, kpt= -0.2500 -0.3750  0.0625 (reduced coord)
  -0.21996   0.04934   0.14032   0.17054
      occupation numbers for kpt#  30
   2.00000   2.00000   0.00000   0.00000
 kpt#  31, nband=  4, wtk=  0.02344, kpt= -0.1875 -0.3750  0.1250 (reduced coord)
  -0.21277   0.03576   0.11405   0.17099
      occupation numbers for kpt#  31
   2.00000   2.00000   0.00001   0.00000
 kpt#  32, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.3750  0.1875 (reduced coord)
  -0.20344   0.02307   0.08710   0.17960
      occupation numbers for kpt#  32
   2.00000   2.00000   0.51113   0.00000
 kpt#  33, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.3750  0.2500 (reduced coord)
  -0.19376   0.01627   0.06431   0.19072
      occupation numbers for kpt#  33
   2.00000   2.00000   1.98969   0.00000
 kpt#  34, nband=  4, wtk=  0.01172, kpt= -0.0625  0.2500  0.0000 (reduced coord)
  -0.26568   0.08144   0.23186   0.27481
      occupation numbers for kpt#  34
   2.00000   1.11361   0.00000   0.00000
 kpt#  35, nband=  4, wtk=  0.01172, kpt= -0.1250  0.3125  0.0000 (reduced coord)
  -0.23641   0.02359   0.17647   0.25687
      occupation numbers for kpt#  35
   2.00000   2.00000   0.00000   0.00000
 kpt#  36, nband=  4, wtk=  0.01172, kpt= -0.1875  0.3750  0.0000 (reduced coord)
  -0.20779  -0.00836   0.12819   0.22616
      occupation numbers for kpt#  36
   2.00000   2.00000   0.00000   0.00000
 kpt#  37, nband=  4, wtk=  0.01172, kpt= -0.2500  0.4375  0.0000 (reduced coord)
  -0.19334  -0.00449   0.09560   0.19499
      occupation numbers for kpt#  37
   2.00000   2.00000   0.06309   0.00000
 kpt#  38, nband=  4, wtk=  0.01172, kpt= -0.3125  0.5000  0.0000 (reduced coord)
  -0.19440   0.01609   0.09783   0.17126
      occupation numbers for kpt#  38
   2.00000   2.00000   0.02966   0.00000
 kpt#  39, nband=  4, wtk=  0.02344, kpt= -0.2500  0.5000  0.0625 (reduced coord)
  -0.19194   0.00863   0.08947   0.16933
      occupation numbers for kpt#  39
   2.00000   2.00000   0.32079   0.00000
 kpt#  40, nband=  4, wtk=  0.02344, kpt= -0.1875  0.5000  0.1250 (reduced coord)
  -0.19011   0.00226   0.08981   0.15976
      occupation numbers for kpt#  40
   2.00000   2.00000   0.29815   0.00000
 kpt#  41, nband=  4, wtk=  0.01172, kpt= -0.3750 -0.4375  0.0000 (reduced coord)
  -0.19853   0.01880   0.14414   0.15867
      occupation numbers for kpt#  41
   2.00000   2.00000   0.00000   0.00000
 kpt#  42, nband=  4, wtk=  0.02344, kpt= -0.3125 -0.4375  0.0625 (reduced coord)
  -0.19605   0.01976   0.11911   0.15121
      occupation numbers for kpt#  42
   2.00000   2.00000   0.00000   0.00000
 kpt#  43, nband=  4, wtk=  0.02344, kpt= -0.2500 -0.4375  0.1250 (reduced coord)
  -0.19176   0.02064   0.09388   0.13802
      occupation numbers for kpt#  43
   2.00000   2.00000   0.10597   0.00000
 kpt#  44, nband=  4, wtk=  0.02344, kpt= -0.1875 -0.4375  0.1875 (reduced coord)
  -0.18688   0.02128   0.07026   0.13602
      occupation numbers for kpt#  44
   2.00000   2.00000   1.91547   0.00000
 kpt#  45, nband=  4, wtk=  0.02344, kpt= -0.1250 -0.4375  0.2500 (reduced coord)
  -0.18282   0.02173   0.05337   0.14632
      occupation numbers for kpt#  45
   2.00000   2.00000   1.99996   0.00000
 kpt#  46, nband=  4, wtk=  0.02344, kpt= -0.0625 -0.4375  0.3125 (reduced coord)
  -0.18044   0.01529   0.05592   0.16125
      occupation numbers for kpt#  46
   2.00000   2.00000   1.99982   0.00000
 kpt#  47, nband=  4, wtk=  0.01172, kpt= -0.0625  0.1250  0.0000 (reduced coord)
  -0.29313   0.19161   0.25477   0.29315
      occupation numbers for kpt#  47
   2.00000   0.00000   0.00000   0.00000
 kpt#  48, nband=  4, wtk=  0.01172, kpt= -0.1250  0.1875  0.0000 (reduced coord)
  -0.27087   0.11586   0.19419   0.28410
      occupation numbers for kpt#  48
   2.00000   0.00000   0.00000   0.00000
 kpt#  49, nband=  4, wtk=  0.01172, kpt= -0.1875  0.2500  0.0000 (reduced coord)
  -0.24028   0.05600   0.13418   0.25806
      occupation numbers for kpt#  49
   2.00000   1.99982   0.00000   0.00000
 kpt#  50, nband=  4, wtk=  0.01172, kpt= -0.2500  0.3125  0.0000 (reduced coord)
  -0.20785   0.02084   0.08330   0.22265
      occupation numbers for kpt#  50
   2.00000   2.00000   0.90427   0.00000
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Total charge density [el/Bohr^3]
,     Maximum=    3.6972E-02  at reduced coord.    0.8333    0.9444    0.9444
,Next maximum=    3.6972E-02  at reduced coord.    0.2778    0.9444    0.9444
,     Minimum=    3.0919E-05  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    9.4059E-05  at reduced coord.    0.0278    0.0000    0.0000
,  Integrated=    4.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.06505147842600E+00
    Hartree energy  =  7.75902859224431E-02
    XC energy       = -9.59273240251112E-01
    Ewald energy    = -3.66788965929106E+00
    PspCore energy  =  1.98019023536441E-01
    Loc. psp. energy= -5.89254990055231E-01
    NL   psp  energy=  2.33115502691458E-01
    >>>>> Internal E= -3.64264159902106E+00

    -kT*entropy     = -9.85301572875280E-04
    >>>>>>>>> Etotal= -3.64362690059393E+00

 Other information on the energy :
    Total energy(eV)= -9.91481302346835E+01 ; Band energy (Ha)=  -3.8583033902E-01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.46612070E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.46612070E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.46612070E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -7.2556E+00 GPa]
- sigma(1 1)=  7.25557636E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  7.25557636E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  7.25557636E+00  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      2.07200000E+02
             ecut      3.00000000E+01 Hartree
           etotal     -3.6436269006E+00
            fcart     -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
             iscf           5
              kpt     -6.25000000E-02 -1.25000000E-01  0.00000000E+00
                      -6.25000000E-02 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.87500000E-01  0.00000000E+00
                      -6.25000000E-02 -1.87500000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.12500000E-01  0.00000000E+00
                      -6.25000000E-02 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -2.50000000E-01  6.25000000E-02
                      -6.25000000E-02 -2.50000000E-01  1.25000000E-01
                      -6.25000000E-02  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01 -4.37500000E-01  0.00000000E+00
                      -6.25000000E-02 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  6.25000000E-02
                      -6.25000000E-02 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.12500000E-01  0.00000000E+00
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.25000000E-01 -3.12500000E-01  1.25000000E-01
                      -6.25000000E-02 -3.12500000E-01  1.87500000E-01
                      -6.25000000E-02  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  4.37500000E-01  0.00000000E+00
                      -1.87500000E-01  5.00000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  0.00000000E+00
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.25000000E-01 -4.37500000E-01  1.25000000E-01
                      -6.25000000E-02 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.75000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  6.25000000E-02
                      -1.87500000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01 -3.75000000E-01  1.87500000E-01
                      -6.25000000E-02 -3.75000000E-01  2.50000000E-01
                      -6.25000000E-02  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.12500000E-01  0.00000000E+00
                      -1.87500000E-01  3.75000000E-01  0.00000000E+00
                      -2.50000000E-01  4.37500000E-01  0.00000000E+00
                      -3.12500000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  6.25000000E-02
                      -1.87500000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01 -4.37500000E-01  0.00000000E+00
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -2.50000000E-01 -4.37500000E-01  1.25000000E-01
                      -1.87500000E-01 -4.37500000E-01  1.87500000E-01
                      -1.25000000E-01 -4.37500000E-01  2.50000000E-01
                      -6.25000000E-02 -4.37500000E-01  3.12500000E-01
                      -6.25000000E-02  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.87500000E-01  0.00000000E+00
                      -1.87500000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.12500000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt        8   -8    8     -8    8    8     -8   -8    8
          kptrlen      8.00000000E+01
P           mkmem          60
            natom           1
            nband           4
            ngfft          36      36      36
             nkpt          60
            nstep           3
             nsym          48
           ntypat           1
              occ      2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000001  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  0.840904  0.000000  0.000000
                       2.000000  1.999992  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000003  0.000000  0.000000
                       2.000000  0.867918  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  1.999833  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  0.008171  0.000000  0.000000
                       2.000000  1.099348  0.000000  0.000000
                       2.000000  1.999714  0.000000  0.000000
                       2.000000  2.000000  0.000269  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000243  0.000000
                       2.000000  1.999515  0.000000  0.000000
                       2.000000  1.999997  0.000000  0.000000
                       2.000000  2.000000  0.000008  0.000000
                       2.000000  2.000000  0.511127  0.000000
                       2.000000  2.000000  1.989691  0.000000
                       2.000000  1.113611  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.063092  0.000000
                       2.000000  2.000000  0.029662  0.000000
                       2.000000  2.000000  0.320785  0.000000
                       2.000000  2.000000  0.298154  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000
                       2.000000  2.000000  0.105965  0.000000
                       2.000000  2.000000  1.915474  0.000000
                       2.000000  2.000000  1.999961  0.000000
                       2.000000  2.000000  1.999825  0.000000
                       2.000000  0.000000  0.000000  0.000000
                       2.000000  0.000002  0.000000  0.000000
                       2.000000  1.999816  0.000000  0.000000
                       2.000000  2.000000  0.904274  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           7
        optforces           1
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           strten      2.4661206956E-04  2.4661206956E-04  2.4661206956E-04
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
           tolvrs      1.00000000E-10
           tsmear      1.00000000E-02 Hartree
            typat      1
              wtk        0.01172    0.01172    0.01172    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.01172
                         0.02344    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.01172    0.01172    0.01172    0.02344
                         0.01172    0.02344    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.02344    0.02344    0.01172    0.02344
                         0.02344    0.02344    0.02344    0.02344    0.01172    0.01172
                         0.01172    0.01172
                       outvars : Printing only first  50 k-points.
            znucl       82.00000

================================================================================

- Total cpu        time (s,m,h):         16.3        0.27      0.005
- Total wall clock time (s,m,h):         16.9        0.28      0.005
-
- For major independent code sections, cpu and wall times (sec),
-  as well as % of the time and number of calls for node 0-
-<BEGIN_TIMER mpi_nprocs = 1, omp_nthreads = 1, mpi_rank = 0>
- cpu_time =           16.3, wall_time =           16.9
-
- routine                        cpu     %       wall     %      number of calls  Gflops 
-                                                                  (-1=no count)
- fourwf%(pot)                  11.130  68.1     11.317  66.9           5327      -1.00    
- nonlop(apply)                  1.400   8.6      1.420   8.4           5327      -1.00    
- fourwf%(den)                   0.464   2.8      0.518   3.1            408      -1.00    
- projbd                         0.449   2.7      0.475   2.8           8254      -1.00    
- invars2                        0.409   2.5      0.410   2.4              1      -1.00    
- abinit(2)                      0.307   1.9      0.311   1.8              1      -1.00    
- nonlop(forces)                 0.282   1.7      0.327   1.9            720      -1.00    
- getghc-other                   0.174   1.1      0.158   0.9             -1      -1.00    
- vtowfk(ssdiag)                 0.138   0.8      0.135   0.8             -1      -1.00    
- timing timab                   0.135   0.8      0.240   1.4              9      -1.00    
- nonlop(forstr)                 0.077   0.5      0.089   0.5            136      -1.00    
- others (82)                    0.211   1.3      0.234   1.4             -1      -1.00    
-<END_TIMER>
-
- subtotal                      15.176  92.8     15.634  92.5

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

-<BEGIN_TIMER mpi_nprocs = 1, omp_nthreads = 1, mpi_rank = world>
- cpu_time =          16.3, wall_time =          16.9
-
- routine                         cpu     %       wall     %      number of calls Gflops 
-                                                                  (-1=no count)
- fourwf%(pot)                  11.130  68.1     11.317  66.9           5327      -1.00    
- nonlop(apply)                  1.400   8.6      1.420   8.4           5327      -1.00    
- fourwf%(den)                   0.464   2.8      0.518   3.1            408      -1.00    
- projbd                         0.449   2.7      0.475   2.8           8254      -1.00    
- invars2                        0.409   2.5      0.410   2.4              1      -1.00    
- abinit(2)                      0.307   1.9      0.311   1.8              1      -1.00    
- nonlop(forces)                 0.282   1.7      0.327   1.9            720      -1.00    
- getghc-other                   0.174   1.1      0.158   0.9             -1      -1.00    
- vtowfk(ssdiag)                 0.138   0.8      0.135   0.8             -1      -1.00    
- timing timab                   0.135   0.8      0.240   1.4              9      -1.00    
- nonlop(forstr)                 0.077   0.5      0.089   0.5            136      -1.00    
- others (82)                    0.211   1.3      0.234   1.4             -1      -1.00    
-<END_TIMER>

- subtotal                      15.176  92.8     15.634  92.5

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
- Proc.   0 individual time (sec): cpu=         16.3  wall=         16.9

================================================================================

 Calculation completed.
.Delivered    8 WARNINGs and   1 COMMENTs to log file.
+Overall time at end (sec) : cpu=         16.3  wall=         16.9
