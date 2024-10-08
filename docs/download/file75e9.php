  ABINIT 
  
  Give name for formatted input file: 
tmoldyn_01.in
  Give name for formatted output file:
tmoldyn_01.out
  Give root name for generic input files:
tmoldyn_in
  Give root name for generic output files:
tmoldyn_out
  Give root name for generic temporary files:
tmoldyn_tmp
-P-0000  leave_test : synchronization done...

.Version 6.12.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Mon  6 Aug 2012.
- ( at 14h27 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 6.12.3
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20120806

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native -mfpmath=sse
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native -mfpmath=sse
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron

 === MPI === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

0 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:0   -O2 -mtune=native -march=native -mfpmath=sse00
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++0
0 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:0
                    CC_GNU                   CXX_GNU                    FC_GNU0
          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC0
        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...           HAVE_FC_CPUTIME0
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA0
            HAVE_FC_GETENV          HAVE_FC_INT_QUAD     HAVE_FC_ISO_C_BINDING0
        HAVE_FC_LONG_LINES              HAVE_FC_NULL         HAVE_FC_STREAM_IO0
          HAVE_FORTRAN2003               HAVE_LINALG        HAVE_LINALG_SERIAL0
                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO0
 HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY             HAVE_OS_LINUX0
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI0
         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF0
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++0
- input  file    -> tmoldyn_01.in�- output file    -> tmoldyn_01.out�- root for input  files -> tmoldyn_in�- root for output files -> tmoldyn_out�
 instrng :    64 lines of input have been read
  m_ab6_invars_f90 (ab6_invars_load) : token%timopt=           0

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13al.pspnc
-P-0000   read the values zionpsp=  3.0 , pspcod=   1 , lmax=   2
-P-0000 � inpspheads : deduce mpsang  =   3, n1xccc  =2501.
-P-0000  leave_test : synchronization done...
� invars1m : enter jdtset=     0
 invars1 : treat image number     1
0 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
0 symlatt : the Bravais lattice is cP (primitive cubic)
0 symlatt : the Bravais lattice is cP (primitive cubic)
� symbrav : COMMENT -�  The Bravais lattice determined only from the primitive�  vectors, bravais(1)=  7, is more symmetric�  than the real one, iholohedry=  1, obtained by taking into�  account the atomic positions. Start deforming the primitive vector set.
0 symlatt : the Bravais lattice is hR (rhombohedral)
� symbrav : COMMENT -�  The Bravais lattice determined from modified primitive�  vectors, bravais(1)=  5, has a lower symmetry than before,�  but is still more symmetric than the real one, iholohedry=  1�  obtained by taking into account the atomic positions.
0 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)
� symbrav : COMMENT -�  The Bravais lattice determined from modified primitive�  vectors, bravais(1)=  2, has a lower symmetry than before,�  but is still more symmetric than the real one, iholohedry=  1�  obtained by taking into account the atomic positions.
0 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : the symmetry operation no.   1 is the identity
 symspgr : spgroup=   1  P1   (=C1^1)
  inkpts : enter
 inkpts: Sum of    1 k point weights is    1.000000
  inkpts : exit 
 npfft, npband, npspinor and npkpt           3          10           1           1
 mpi_enreg%sizecart(1),np_fft   =           3           3
 mpi_enreg%sizecart(2),np_band  =          10          10
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 invars1: mkmem  undefined in the input file. Use default mkmem  = nkpt
 invars1: With nkpt_me=    1 and mkmem  =     1, ground state wf handled in core.
 invars1: mkqmem undefined in the input file. Use default mkqmem = nkpt
 invars1: With nkpt_me=    1 and mkqmem =     1, ground state wf handled in core.
 invars1: mk1mem undefined in the input file. Use default mk1mem = nkpt
 invars1: With nkpt_me=    1 and mk1mem =     1, ground state wf handled in core.
� Symmetries : space group P1 (#  1); Bravais aP (primitive triclinic)
  inkpts : enter
 inkpts: Sum of    1 k point weights is    1.000000
  inkpts : exit 
 chkneu : initialized the occupation numbers for occopt=    3     spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 npfft, npband, npspinor and npkpt           3          10           1           1
 mpi_enreg%sizecart(1),np_fft   =           3           3
 mpi_enreg%sizecart(2),np_band  =          10          10
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
P getng.F90:199:WARNINGP   The second and third dimension of the FFT grid,    0    0  were imposed to be multiple of the number of processors for the FFT,    3
 For input ecut=  3.000000E+00 best grid ngfft=      20      24      24       max ecut=  3.007264E+00
P ==== FFT mesh ====
  FFT mesh divisions ........................    20   24   24P  Augmented FFT divisions ...................    21   25   24P  FFT algorithm .............................   401P  FFT cache size ............................    16
 getmpw: optimal value of mpw=       8
� getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,�                      lmnmaxso=   4, lnmaxso=   2.
 setmqgrid : COMMENT -�  The number of points "mqgrid" in reciprocal space used for the�  description of the pseudopotentials has been set automatically�  by abinit to :     3001.
 memory : analysis of memory needs
================================================================================@ Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =        12    iscf =         7 xclevel =         1@  lmnmax =         2   lnmax =         2   mband =        80  mffmem =         1
P  mgfft =        24   mkmem =         1 mpssoang=         3     mpw =         8@  mqgrid =      3001   natom =        32    nfft =      3840    nkpt =         1@  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1@    nsym =         1  n1xccc =      2501  ntypat =         1  occopt =         3
================================================================================
P This job should need less than                       2.985 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.031 Mbytes ; DEN or POT disk file :      0.031 Mbytes.
================================================================================�
 Biggest array : f_fftgr(disk), with      0.4708 MBytes.
-P-0000  leave_test : synchronization done...
 memana : allocated an array of      0.471 Mbytes, for testing purposes.
 memana : allocated       2.985 Mbytes, for testing purposes. � The job will continue.
--------------------------------------------------------------------------------P------------- Echo of variables that govern the present computation ------------P--------------------------------------------------------------------------------P-P- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0P-
- outvars: echo of global parameters not present in the input file              P-   nproc =   30P-
 -outvars: echo values of preprocessed input variables --------
 P These variables are accessible in NetCDF format (tmoldyn_out_OUT.nc)P
        accesswff           1
            acell      1.2810000000E+01  1.2810000000E+01  1.2810000000E+01 Bohr
              amu      2.69815390E+01
           bandpp           2
             ecut      3.00000000E+00 Hartree
           fftalg         401
      fft_opt_lob           2
           ionmov          12
           iprcch           6
           istwfk        2
           kptopt           0
           mdtemp      3.00000000E+03  3.00000000E+03
P           mkmem           1
            natom          32
            nband          80
            ngfft          20      24      24
             nkpt           1
           npband          10
            npfft           3
            nstep          50
             nsym           1
            ntime          50
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
           occopt           3
           ortalg          -2
        paral_kgb           1
           prtden           0
           prteig           0
            prtwf           0
          spgroup           1
           tolvrs      1.00000000E-03
           tsmear      9.50044600E-03 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1
         wfoptalg          14
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.6946900105E+00  1.6946900105E+00
                       1.6946900105E+00  0.0000000000E+00  1.6946900105E+00
                       1.6946900105E+00  1.6946900105E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.3893800210E+00
                       0.0000000000E+00  1.6946900105E+00  5.0840700315E+00
                       1.6946900105E+00  0.0000000000E+00  5.0840700315E+00
                       1.6946900105E+00  1.6946900105E+00  3.3893800210E+00
                       0.0000000000E+00  3.3893800210E+00  0.0000000000E+00
                       0.0000000000E+00  5.0840700315E+00  1.6946900105E+00
                       1.6946900105E+00  3.3893800210E+00  1.6946900105E+00
                       1.6946900105E+00  5.0840700315E+00  0.0000000000E+00
                       0.0000000000E+00  3.3893800210E+00  3.3893800210E+00
                       0.0000000000E+00  5.0840700315E+00  5.0840700315E+00
                       1.6946900105E+00  3.3893800210E+00  5.0840700315E+00
                       1.6946900105E+00  5.0840700315E+00  3.3893800210E+00
                       3.3893800210E+00  0.0000000000E+00  0.0000000000E+00
                       3.3893800210E+00  1.6946900105E+00  1.6946900105E+00
                       5.0840700315E+00  0.0000000000E+00  1.6946900105E+00
                       5.0840700315E+00  1.6946900105E+00  0.0000000000E+00
                       3.3893800210E+00  0.0000000000E+00  3.3893800210E+00
                       3.3893800210E+00  1.6946900105E+00  5.0840700315E+00
                       5.0840700315E+00  0.0000000000E+00  5.0840700315E+00
                       5.0840700315E+00  1.6946900105E+00  3.3893800210E+00
                       3.3893800210E+00  3.3893800210E+00  0.0000000000E+00
                       3.3893800210E+00  5.0840700315E+00  1.6946900105E+00
                       5.0840700315E+00  3.3893800210E+00  1.6946900105E+00
                       5.0840700315E+00  5.0840700315E+00  0.0000000000E+00
                       3.3893800210E+00  3.3893800210E+00  3.3893800210E+00
                       3.3893800210E+00  5.0840700315E+00  5.0840700315E+00
                       5.0840700315E+00  3.3893800210E+00  5.0840700315E+00
                       5.0840700315E+00  5.0840700315E+00  3.3893800210E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.2025000000E+00  3.2025000000E+00
                       3.2025000000E+00  0.0000000000E+00  3.2025000000E+00
                       3.2025000000E+00  3.2025000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  6.4050000000E+00
                       0.0000000000E+00  3.2025000000E+00  9.6075000000E+00
                       3.2025000000E+00  0.0000000000E+00  9.6075000000E+00
                       3.2025000000E+00  3.2025000000E+00  6.4050000000E+00
                       0.0000000000E+00  6.4050000000E+00  0.0000000000E+00
                       0.0000000000E+00  9.6075000000E+00  3.2025000000E+00
                       3.2025000000E+00  6.4050000000E+00  3.2025000000E+00
                       3.2025000000E+00  9.6075000000E+00  0.0000000000E+00
                       0.0000000000E+00  6.4050000000E+00  6.4050000000E+00
                       0.0000000000E+00  9.6075000000E+00  9.6075000000E+00
                       3.2025000000E+00  6.4050000000E+00  9.6075000000E+00
                       3.2025000000E+00  9.6075000000E+00  6.4050000000E+00
                       6.4050000000E+00  0.0000000000E+00  0.0000000000E+00
                       6.4050000000E+00  3.2025000000E+00  3.2025000000E+00
                       9.6075000000E+00  0.0000000000E+00  3.2025000000E+00
                       9.6075000000E+00  3.2025000000E+00  0.0000000000E+00
                       6.4050000000E+00  0.0000000000E+00  6.4050000000E+00
                       6.4050000000E+00  3.2025000000E+00  9.6075000000E+00
                       9.6075000000E+00  0.0000000000E+00  9.6075000000E+00
                       9.6075000000E+00  3.2025000000E+00  6.4050000000E+00
                       6.4050000000E+00  6.4050000000E+00  0.0000000000E+00
                       6.4050000000E+00  9.6075000000E+00  3.2025000000E+00
                       9.6075000000E+00  6.4050000000E+00  3.2025000000E+00
                       9.6075000000E+00  9.6075000000E+00  0.0000000000E+00
                       6.4050000000E+00  6.4050000000E+00  6.4050000000E+00
                       6.4050000000E+00  9.6075000000E+00  9.6075000000E+00
                       9.6075000000E+00  6.4050000000E+00  9.6075000000E+00
                       9.6075000000E+00  9.6075000000E+00  6.4050000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  2.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  2.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       2.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  7.5000000000E-01  2.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       0.0000000000E+00  7.5000000000E-01  7.5000000000E-01
                       2.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       2.5000000000E-01  7.5000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  2.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  2.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  2.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  0.0000000000E+00  7.5000000000E-01
                       7.5000000000E-01  2.5000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  7.5000000000E-01  2.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  2.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  7.5000000000E-01  7.5000000000E-01
                       7.5000000000E-01  5.0000000000E-01  7.5000000000E-01
                       7.5000000000E-01  7.5000000000E-01  5.0000000000E-01
            znucl       13.00000
P================================================================================
-P-0000  leave_test : synchronization done...
p chkinp: machine precision is   2.2204460492503131E-16
p chkinp: Checking input parameters for consistency.
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    32)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1
-P-0000 ================================================================================== DATASET  1 ==================================================================
dtsetcopy : copying area  algalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  atvshift   the actual size (     0) of the index (     3)  differs from its standard size (    32)
dtsetcopy : copying area  kberry     the actual size (    20) of the index (     2)  differs from its standard size (     1)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     1)  differs from its standard size (     0)
dtsetcopy : copying area  mixalch    the actual size (     1) of the index (     2)  differs from its standard size (     0)
dtsetcopy : copying area  shiftk     the actual size (     8) of the index (     2)  differs from its standard size (     1)
 setmqgrid : COMMENT -�  The number of points "mqgrid" in reciprocal space used for the�  description of the pseudopotentials has been set automatically�  by abinit to :     3001.
� getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,�                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:�  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:�  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 npfft, npband, npspinor and npkpt           3          10           1           1
 mpi_enreg%sizecart(1),np_fft   =           3           3
 mpi_enreg%sizecart(2),np_band  =          10          10
 mpi_enreg%sizecart(3),np_kpt   =           1           1
 mpi_enreg%sizecart(4),np_spinor=           1           1
 in initmpi_grid : me_fft, me_band, me_spin , me_kpt are            0           0           0           0
 Unit cell volume ucvol=  2.1020710E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
  getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  24  24          ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242
kpgio: loop on k-points done in parallel
- pspatm: opening atomic psp file    13al.pspnc
  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260�         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed�
   6.80609581E+02                                ecore*ucvol(ha*bohr**3)
-P-0000  wfconv:    80 bands initialized randomly with npw=     8, for ikpt=     1
-P-0000  leave_test : synchronization done...
 newkpt: loop on k-points done in parallel
 pareigocc : MPI_ALLREDUCE

 setup2: Arith. and geom. avg. npw (full set) are      15.000      15.000
 initro : for itypat=  1, take decay length=      1.2500,� initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.
�================================================================================
 Could no open tmoldyn_out_HIST, starting from scratch
�=== [ionmov=12] Isokinetic ensemble molecular dynamics                      �================================================================================
�--- Iteration: ( 1/50) Internal Cycle: (1/1)�--------------------------------------------------------------------------------
  Cartesian coordinates (xcart) [bohr]P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  3.20250000000000E+00  3.20250000000000E+00P  3.20250000000000E+00  0.00000000000000E+00  3.20250000000000E+00P  3.20250000000000E+00  3.20250000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  6.40500000000000E+00P  0.00000000000000E+00  3.20250000000000E+00  9.60750000000000E+00P  3.20250000000000E+00  0.00000000000000E+00  9.60750000000000E+00P  3.20250000000000E+00  3.20250000000000E+00  6.40500000000000E+00P  0.00000000000000E+00  6.40500000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  9.60750000000000E+00  3.20250000000000E+00P  3.20250000000000E+00  6.40500000000000E+00  3.20250000000000E+00P  3.20250000000000E+00  9.60750000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  6.40500000000000E+00  6.40500000000000E+00P  0.00000000000000E+00  9.60750000000000E+00  9.60750000000000E+00P  3.20250000000000E+00  6.40500000000000E+00  9.60750000000000E+00P  3.20250000000000E+00  9.60750000000000E+00  6.40500000000000E+00P  6.40500000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  6.40500000000000E+00  3.20250000000000E+00  3.20250000000000E+00P  9.60750000000000E+00  0.00000000000000E+00  3.20250000000000E+00P  9.60750000000000E+00  3.20250000000000E+00  0.00000000000000E+00P  6.40500000000000E+00  0.00000000000000E+00  6.40500000000000E+00P  6.40500000000000E+00  3.20250000000000E+00  9.60750000000000E+00P  9.60750000000000E+00  0.00000000000000E+00  9.60750000000000E+00P  9.60750000000000E+00  3.20250000000000E+00  6.40500000000000E+00P  6.40500000000000E+00  6.40500000000000E+00  0.00000000000000E+00P  6.40500000000000E+00  9.60750000000000E+00  3.20250000000000E+00P  9.60750000000000E+00  6.40500000000000E+00  3.20250000000000E+00P  9.60750000000000E+00  9.60750000000000E+00  0.00000000000000E+00P  6.40500000000000E+00  6.40500000000000E+00  6.40500000000000E+00P  6.40500000000000E+00  9.60750000000000E+00  9.60750000000000E+00P  9.60750000000000E+00  6.40500000000000E+00  9.60750000000000E+00P  9.60750000000000E+00  9.60750000000000E+00  6.40500000000000E+00
 Reduced coordinates (xred)P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  2.50000000000000E-01  2.50000000000000E-01P  2.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01P  2.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  5.00000000000000E-01P  0.00000000000000E+00  2.50000000000000E-01  7.50000000000000E-01P  2.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01P  2.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01P  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00P  0.00000000000000E+00  7.50000000000000E-01  2.50000000000000E-01P  2.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01P  2.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00P  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01P  0.00000000000000E+00  7.50000000000000E-01  7.50000000000000E-01P  2.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01P  2.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01P  5.00000000000000E-01  0.00000000000000E+00  0.00000000000000E+00P  5.00000000000000E-01  2.50000000000000E-01  2.50000000000000E-01P  7.50000000000000E-01  0.00000000000000E+00  2.50000000000000E-01P  7.50000000000000E-01  2.50000000000000E-01  0.00000000000000E+00P  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01P  5.00000000000000E-01  2.50000000000000E-01  7.50000000000000E-01P  7.50000000000000E-01  0.00000000000000E+00  7.50000000000000E-01P  7.50000000000000E-01  2.50000000000000E-01  5.00000000000000E-01P  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00P  5.00000000000000E-01  7.50000000000000E-01  2.50000000000000E-01P  7.50000000000000E-01  5.00000000000000E-01  2.50000000000000E-01P  7.50000000000000E-01  7.50000000000000E-01  0.00000000000000E+00P  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01P  5.00000000000000E-01  7.50000000000000E-01  7.50000000000000E-01P  7.50000000000000E-01  5.00000000000000E-01  7.50000000000000E-01P  7.50000000000000E-01  7.50000000000000E-01  5.00000000000000E-01
 Cartesian velocities (vel) [bohr*Ha/hbar]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00P  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Kinetic energy of ions (ekin) [Ha]=  0.00000000000000E+00
�---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
  getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  24  24          ecut(hartree)=      3.000   => boxcut(ratio)=   2.00242
  scfcv : before setvtr, energies%e_hartree=   0.0000000000000000     
� ewald : nr and ng are    3 and   15
  mklocl_recipspace : will add potential with strength vprtrb(:)=   0.0000000000000000        0.0000000000000000     
  setvtr : istep,n1xccc,moved_rhor=           1        2501           0
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
  scfcv : after setvtr, energies%e_hartree=   0.0000000000000000     
� ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
 newocc : new Fermi energy is       0.503625 , with nelect=     96.000000�  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 1.985 1.985 1.985 1.863 1.863 1.863
 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.863 1.281 1.281 1.281
 1.281 1.281 1.281 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
-P-0000  leave_test : synchronization done...
mkrho: loop on k-points and spins done in parallel
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    6.2644E-02  at reduced coord.    0.9000    0.1250    0.1250
,     Minimum=    6.6006E-03  at reduced coord.    0.2500    0.5000    0.0833
,  Integrated=    9.6000E+01
 vtorho: echo density
 Total charge density [el/Bohr^3]
,     Maximum=    6.2644E-02  at reduced coord.    0.9000    0.1250    0.1250
,     Minimum=    6.6006E-03  at reduced coord.    0.2500    0.5000    0.0833
,  Integrated=    9.6000E+01
  mkdenpos : enter 
  xc_denpos=  9.99999999999999999E-015
 ETOT  1  -74.984959792884    -7.498E+01 1.365E-04 8.058E+00
 scprqt: <Vxc>= -4.4276190E-01 hartree
  newvtr : enter 
  newvtr : ispmix,nfft,nfftmix=           1        3840        3840
�Simple mixing update:
  residual square of the potential :   4.9446804551183527
� ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
  lobpcgwf : enter, dtset%timopt=           0
  lobpcgwf : enter, dtset%timopt=           0
-P-0000  leave_test : synchronization done...
 vtorho: loop on k-points and spins done in parallel
