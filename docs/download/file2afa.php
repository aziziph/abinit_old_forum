
.Version 7.8.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.1 computer) 

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

.Starting date : Sun  3 Aug 2014.
- ( at 03h27 )
  
- input  file    -> t03.in
- output file    -> t03.out
- root for input  files -> t03i
- root for output files -> t03o
 
 
 DATASET    1 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         2   lnmax =         2   mband =         6  mffmem =         1
P  mgfft =        40   mkmem =         1 mpssoang=         2     mpw =      3743
  mqgrid =      3001   natom =         1    nfft =     64000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         3  occopt =         7
================================================================================
P This job should need less than                      21.397 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.345 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
================================================================================
 
 
 DATASET    2 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         2   lnmax =         2   mband =         6  mffmem =         1
P  mgfft =        40   mkmem =         1 mpssoang=         2     mpw =      3743
  mqgrid =      3001   natom =         1    nfft =     64000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         3  occopt =         7
================================================================================
P This job should need less than                      21.397 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.345 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
================================================================================
 
 
 DATASET    3 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         2   lnmax =         2   mband =         6  mffmem =         1
P  mgfft =        40   mkmem =         1 mpssoang=         2     mpw =      3743
  mqgrid =      3001   natom =         1    nfft =     64000    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         3  occopt =         7
================================================================================
P This job should need less than                      21.397 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.345 Mbytes ; DEN or POT disk file :      0.490 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      1.59994000E+01  1.59994000E+01  1.59994000E+01
           diemac      1.00000000E+00
           diemix      3.33333333E-01
             ecut      1.80000000E+01 Hartree
           enunit           2
-          fftalg         312
           istwfk        1
              ixc1    -106131
              ixc2    -106132
              ixc3    -110131
           jdtset        1    2    3
           kptopt           0
P           mkmem           1
            natom           1
            nband           6
           ndtset           3
            ngfft          40      40      40
             nkpt           1
            nstep           6
             nsym          48
           ntypat           3
              occ      2.000000  2.000000  2.000000  0.000000  0.000000  0.000000
           occopt           7
            prtwf           0
          spgroup         221
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           toldfe      1.00000000E-08 Hartree
           tsmear      2.00000000E-02 Hartree
            typat1     1
            typat2     2
            typat3     3
            znucl        8.00000    8.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =    1
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 10.0000000  0.0000000  0.0000000  G(1)=  0.1000000  0.0000000  0.0000000
 R(2)=  0.0000000 10.0000000  0.0000000  G(2)=  0.0000000  0.1000000  0.0000000
 R(3)=  0.0000000  0.0000000 10.0000000  G(3)=  0.0000000  0.0000000  0.1000000
 Unit cell volume ucvol=  1.0000000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  40
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.09440
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   18    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434203
 cc(1:2)= -16.9918924   2.5661421
 for angular momentum l =  0 r(l) =   0.2208314
   h11, h12, h13 =  18.3888510   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2172007
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0070171   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.12265823
         --- l  ekb(1:nproj) -->
             0    0.702008
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   19    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2440184
 cc(1:2)= -16.7059080   2.4929267
 for angular momentum l =  0 r(l) =   0.2208649
   h11, h12, h13 =  18.3475937   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2129036
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0074058   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.13322981
         --- l  ekb(1:nproj) -->
             0    0.700751
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   25    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434001
 cc(1:2)= -16.3472155   2.4177260
 for angular momentum l =  0 r(l) =   0.2207902
   h11, h12, h13 =  18.3144392   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2200899
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0067427   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.16810484
         --- l  ekb(1:nproj) -->
             0    0.698776
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
   7.35949377E-01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
P newkpt: treating      6 bands with npw=    3743 for ikpt=   1 by node    0
 
_setup2: Arith. and geom. avg. npw (full set) are    3743.000    3743.000
 
================================================================================
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -14.882836687740    -1.488E+01 3.949E-02 8.056E+02
 ETOT  2  -15.042589995775    -1.598E-01 1.121E-07 6.440E+02
 ETOT  3  -15.052451053657    -9.861E-03 1.443E-05 4.519E+02
 ETOT  4  -15.055817006015    -3.366E-03 4.681E-06 2.142E+02
 ETOT  5  -15.057376129281    -1.559E-03 5.382E-06 2.406E+01
 ETOT  6  -15.057404785625    -2.866E-05 6.178E-08 8.376E+00
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.83346897E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.83346897E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.83346897E-04  sigma(2 1)=  0.00000000E+00
 
 
 scprqt:  WARNING -
  nstep=    6 was not enough SCF cycles to converge;
  maximum energy difference=  2.866E-05 exceeds toldfe=  1.000E-08
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   2.6442E-08; max=  6.1779E-08
   0.0000  0.0000  0.0000    1  6.17788E-08 kpt; spin; max resid(k); each band:
  6.18E-08 1.19E-08 1.19E-08 1.19E-08 6.05E-08 5.78E-10
 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.000000000000 10.000000000000 10.000000000000 bohr
              =  5.291772085900  5.291772085900  5.291772085900 angstroms
 prteigrs : about to open file t03o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.28049   Average Vxc (hartree)=  -0.08255
 Eigenvalues (hartree) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.88049  -0.28658  -0.28658  -0.28658  -0.01937   0.16404
      occupation numbers for kpt#   1
   2.00000   1.33333   1.33333   1.33333   0.00000   0.00000
 Fermi (or HOMO) energy (eV) =  -7.63242   Average Vxc (eV)=  -2.24638
 Eigenvalues (   eV  ) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
 -23.95928  -7.79817  -7.79817  -7.79817  -0.52719   4.46363
 Total charge density [el/Bohr^3]
,     Maximum=    7.1427E-01  at reduced coord.    0.9500    0.9750    0.9750
,Next maximum=    7.1427E-01  at reduced coord.    0.0500    0.9750    0.9750
,     Minimum=    9.3093E-08  at reduced coord.    0.5000    0.5000    0.0000
,Next minimum=    9.3093E-08  at reduced coord.    0.5000    0.0000    0.5000
,  Integrated=    6.0000E+00
 
--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :
 
    Kinetic energy  =  9.28650082901833E+00
    Hartree energy  =  7.90297260879156E+00
    XC energy       = -3.07623800665398E+00
    Ewald energy    = -5.10713546306510E+00
    PspCore energy  =  7.35949376581424E-04
    Loc. psp. energy= -2.58444001460775E+01
    NL   psp  energy=  1.81101190694234E+00
    >>>>> Internal E= -1.50265523216677E+01
 
    -kT*entropy     = -3.08524639572999E-02
    >>>>>>>>> Etotal= -1.50574047856250E+01
 
 Other information on the energy :
    Total energy(eV)= -4.09732821557044E+02 ; Band energy (Ha)=  -2.9072851405E+00
--------------------------------------------------------------------------------
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.83346897E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.83346897E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.83346897E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -2.0105E+01 GPa]
- sigma(1 1)=  2.01047565E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.01047565E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.01047565E+01  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   nproc =    1
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 10.0000000  0.0000000  0.0000000  G(1)=  0.1000000  0.0000000  0.0000000
 R(2)=  0.0000000 10.0000000  0.0000000  G(2)=  0.0000000  0.1000000  0.0000000
 R(3)=  0.0000000  0.0000000 10.0000000  G(3)=  0.0000000  0.0000000  0.1000000
 Unit cell volume ucvol=  1.0000000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  40
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.09440
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   18    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434203
 cc(1:2)= -16.9918924   2.5661421
 for angular momentum l =  0 r(l) =   0.2208314
   h11, h12, h13 =  18.3888510   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2172007
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0070171   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.12265823
         --- l  ekb(1:nproj) -->
             0    0.702008
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   19    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2440184
 cc(1:2)= -16.7059080   2.4929267
 for angular momentum l =  0 r(l) =   0.2208649
   h11, h12, h13 =  18.3475937   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2129036
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0074058   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.13322981
         --- l  ekb(1:nproj) -->
             0    0.700751
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   25    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434001
 cc(1:2)= -16.3472155   2.4177260
 for angular momentum l =  0 r(l) =   0.2207902
   h11, h12, h13 =  18.3144392   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2200899
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0067427   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.16810484
         --- l  ekb(1:nproj) -->
             0    0.698776
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
   7.99378834E-01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
P newkpt: treating      6 bands with npw=    3743 for ikpt=   1 by node    0
 
_setup2: Arith. and geom. avg. npw (full set) are    3743.000    3743.000
 
================================================================================
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -14.971702423311    -1.497E+01 4.916E-02 5.461E+02
 ETOT  2  -15.084030125103    -1.123E-01 1.171E-07 7.114E+02
 ETOT  3  -15.089345157363    -5.315E-03 3.526E-06 5.577E+02
 ETOT  4  -15.095185974303    -5.841E-03 1.028E-05 2.053E+02
 ETOT  5  -15.096796554871    -1.611E-03 5.319E-06 2.662E+01
 ETOT  6  -15.096839081026    -4.253E-05 1.726E-07 7.429E+00
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.73475997E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.73475997E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.73475997E-04  sigma(2 1)=  0.00000000E+00
 
 
 scprqt:  WARNING -
  nstep=    6 was not enough SCF cycles to converge;
  maximum energy difference=  4.253E-05 exceeds toldfe=  1.000E-08
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   7.4759E-08; max=  1.7258E-07
   0.0000  0.0000  0.0000    1  1.72580E-07 kpt; spin; max resid(k); each band:
  1.73E-07 3.21E-08 3.21E-08 3.21E-08 1.70E-07 9.88E-09
 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.000000000000 10.000000000000 10.000000000000 bohr
              =  5.291772085900  5.291772085900  5.291772085900 angstroms
 prteigrs : about to open file t03o_DS2_EIG
 Fermi (or HOMO) energy (hartree) =  -0.28573   Average Vxc (hartree)=  -0.07779
 Eigenvalues (hartree) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.88776  -0.29182  -0.29182  -0.29182  -0.01338   0.17071
      occupation numbers for kpt#   1
   2.00000   1.33333   1.33333   1.33333   0.00000   0.00000
 Fermi (or HOMO) energy (eV) =  -7.77509   Average Vxc (eV)=  -2.11679
 Eigenvalues (   eV  ) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
 -24.15715  -7.94085  -7.94085  -7.94085  -0.36410   4.64515
 Total charge density [el/Bohr^3]
,     Maximum=    7.1373E-01  at reduced coord.    0.9500    0.9750    0.9750
,Next maximum=    7.1373E-01  at reduced coord.    0.0500    0.9750    0.9750
,     Minimum=    9.0275E-08  at reduced coord.    0.5000    0.4750    0.2500
,Next minimum=    9.0275E-08  at reduced coord.    0.4750    0.5000    0.2500
,  Integrated=    6.0000E+00
 
--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :
 
    Kinetic energy  =  9.29279841530837E+00
    Hartree energy  =  7.92481916955186E+00
    XC energy       = -3.11724262597911E+00
    Ewald energy    = -5.10713546306510E+00
    PspCore energy  =  7.99378834143591E-04
    Loc. psp. energy= -2.58662106496648E+01
    NL   psp  energy=  1.80618515794557E+00
    >>>>> Internal E= -1.50659866170691E+01
 
    -kT*entropy     = -3.08524639572975E-02
    >>>>>>>>> Etotal= -1.50968390810264E+01
 
 Other information on the energy :
    Total energy(eV)= -4.10805883306459E+02 ; Band energy (Ha)=  -2.9428017565E+00
--------------------------------------------------------------------------------
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.73475997E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.73475997E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.73475997E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -1.9814E+01 GPa]
- sigma(1 1)=  1.98143446E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.98143446E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.98143446E+01  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  3 ==================================================================
-   nproc =    1
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)= 10.0000000  0.0000000  0.0000000  G(1)=  0.1000000  0.0000000  0.0000000
 R(2)=  0.0000000 10.0000000  0.0000000  G(2)=  0.0000000  0.1000000  0.0000000
 R(3)=  0.0000000  0.0000000 10.0000000  G(3)=  0.0000000  0.0000000  0.1000000
 Unit cell volume ucvol=  1.0000000E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  40  40  40
         ecut(hartree)=     18.000   => boxcut(ratio)=   2.09440
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.blyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   18    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434203
 cc(1:2)= -16.9918924   2.5661421
 for angular momentum l =  0 r(l) =   0.2208314
   h11, h12, h13 =  18.3888510   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2172007
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0070171   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.12265823
         --- l  ekb(1:nproj) -->
             0    0.702008
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.bp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   19    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2440184
 cc(1:2)= -16.7059080   2.4929267
 for angular momentum l =  0 r(l) =   0.2208649
   h11, h12, h13 =  18.3475937   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2129036
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0074058   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.13322981
         --- l  ekb(1:nproj) -->
             0    0.700751
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- pspatm: opening atomic psp file    /home/weitong/setup/abinit/abinit-7.8.2/tests/Psps_for_tests/08o.6.olyp.hgh
- Goedecker pseudopotential for O
-  8.00000   6.00000     70301                znucl, zion, pspdat
   10   25    1    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 rloc=   0.2434001
 cc(1:2)= -16.3472155   2.4177260
 for angular momentum l =  0 r(l) =   0.2207902
   h11, h12, h13 =  18.3144392   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
 for angular momentum l =  1 r(l) =   0.2200899
   h11, h12, h13 =   0.0000000   0.0000000   0.0000000
        h22, h23 =               0.0000000   0.0000000
             h33 =                           0.0000000
   k11, k12, k13 =   0.0067427   0.0000000   0.0000000
        k22, k23 =               0.0000000   0.0000000
             k33 =                           0.0000000
-  Local part computed in reciprocal space.
 
 pspatm : COMMENT -
  the projectors are not normalized,
  so that the KB energies are not consistent with 
  definition in PRB44, 8503 (1991). 
  However, this does not influence the results obtained hereafter.
 pspatm: epsatm=    0.16810484
         --- l  ekb(1:nproj) -->
             0    0.698776
             1    0.000000
 pspatm: atomic psp has been read  and splines computed
 
   1.00862906E+00                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------
 
P newkpt: treating      6 bands with npw=    3743 for ikpt=   1 by node    0
 
_setup2: Arith. and geom. avg. npw (full set) are    3743.000    3743.000
 
================================================================================
 
     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -14.904225025218    -1.490E+01 2.431E-02 1.474E+03
 ETOT  2  -15.069421413164    -1.652E-01 2.101E-07 5.144E+02
 ETOT  3  -15.083015977946    -1.359E-02 2.596E-05 3.564E+02
 ETOT  4  -15.085616812550    -2.601E-03 2.721E-06 1.886E+02
 ETOT  5  -15.087129223028    -1.512E-03 3.212E-06 2.546E+01
 ETOT  6  -15.087216343715    -8.712E-05 1.224E-07 3.665E+00
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.67834909E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.67834909E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.67834909E-04  sigma(2 1)=  0.00000000E+00
 
 
 scprqt:  WARNING -
  nstep=    6 was not enough SCF cycles to converge;
  maximum energy difference=  8.712E-05 exceeds toldfe=  1.000E-08
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   8.0053E-08; max=  1.2244E-07
   0.0000  0.0000  0.0000    1  1.22442E-07 kpt; spin; max resid(k); each band:
  1.22E-07 5.73E-08 5.73E-08 5.73E-08 1.20E-07 6.54E-08
 reduced coordinates (array xred) for    1 atoms
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 
 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b
 
 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.000000000000 10.000000000000 10.000000000000 bohr
              =  5.291772085900  5.291772085900  5.291772085900 angstroms
 prteigrs : about to open file t03o_DS3_EIG
 Fermi (or HOMO) energy (hartree) =  -0.28155   Average Vxc (hartree)=  -0.10075
 Eigenvalues (hartree) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.88878  -0.28764  -0.28764  -0.28764  -0.03903   0.13944
      occupation numbers for kpt#   1
   2.00000   1.33333   1.33333   1.33333   0.00000   0.00000
 Fermi (or HOMO) energy (eV) =  -7.66125   Average Vxc (eV)=  -2.74149
 Eigenvalues (   eV  ) for nkpt=   1  k points:
 kpt#   1, nband=  6, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
 -24.18507  -7.82700  -7.82700  -7.82700  -1.06217   3.79436
 Total charge density [el/Bohr^3]
,     Maximum=    7.1479E-01  at reduced coord.    0.9500    0.9750    0.9750
,Next maximum=    7.1479E-01  at reduced coord.    0.0500    0.9750    0.9750
,     Minimum=    9.1351E-08  at reduced coord.    0.5000    0.4750    0.2500
,Next minimum=    9.1351E-08  at reduced coord.    0.4750    0.5000    0.2500
,  Integrated=    6.0000E+00
 
--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :
 
    Kinetic energy  =  9.32062878824550E+00
    Hartree energy  =  7.95322422307817E+00
    XC energy       = -3.12550114616401E+00
    Ewald energy    = -5.10713546306510E+00
    PspCore energy  =  1.00862905745594E-03
    Loc. psp. energy= -2.58957371817554E+01
    NL   psp  energy=  1.79714827084601E+00
    >>>>> Internal E= -1.50563638797574E+01
 
    -kT*entropy     = -3.08524639572996E-02
    >>>>>>>>> Etotal= -1.50872163437147E+01
 
 Other information on the energy :
    Total energy(eV)= -4.10544035307685E+02 ; Band energy (Ha)=  -2.9281184917E+00
--------------------------------------------------------------------------------
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.67834909E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.67834909E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  6.67834909E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -1.9648E+01 GPa]
- sigma(1 1)=  1.96483781E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.96483781E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.96483781E+01  sigma(2 1)=  0.00000000E+00
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0000000000E+01  1.0000000000E+01  1.0000000000E+01 Bohr
              amu      1.59994000E+01  1.59994000E+01  1.59994000E+01
           diemac      1.00000000E+00
           diemix      3.33333333E-01
             ecut      1.80000000E+01 Hartree
           enunit           2
           etotal1    -1.5057404786E+01
           etotal2    -1.5096839081E+01
           etotal3    -1.5087216344E+01
            fcart1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         312
           istwfk        1
              ixc1    -106131
              ixc2    -106132
              ixc3    -110131
           jdtset        1    2    3
           kptopt           0
P           mkmem           1
            natom           1
            nband           6
           ndtset           3
            ngfft          40      40      40
             nkpt           1
            nstep           6
             nsym          48
           ntypat           3
              occ      2.000000  1.333333  1.333333  1.333333  0.000000  0.000000
           occopt           7
            prtwf           0
          spgroup         221
           strten1     6.8334689738E-04  6.8334689738E-04  6.8334689738E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2     6.7347599718E-04  6.7347599718E-04  6.7347599718E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3     6.6783490946E-04  6.6783490946E-04  6.6783490946E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           toldfe      1.00000000E-08 Hartree
           tsmear      2.00000000E-02 Hartree
            typat1     1
            typat2     2
            typat3     3
            znucl        8.00000    8.00000    8.00000
 
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

 [1] Libxc: A library of exchange and correlation functionals for density functional theory.
 M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
 Comment : to be cited when LibXC is used (negative value of ixc)
 Strong suggestion to cite this paper.

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [3] A brief introduction to the ABINIT software package.
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

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
-
- Proc.   0 individual time (sec): cpu=          3.8  wall=          4.6
 
================================================================================
 
 Calculation completed.
.Delivered   12 WARNINGs and  10 COMMENTs to log file.
+Overall time at end (sec) : cpu=          3.8  wall=          4.6
