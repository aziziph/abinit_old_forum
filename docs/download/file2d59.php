# C in diamond structure. 
 ndtset 24 udtset 8 3
 iqpt:? 1               # Index of the first q-point of this file (useful if you split your 
                        # input files

 elph2_imagden 0.1 eV   # Imaginary shift of the denominator of the sum-over-states 
                        # in the perturbation denominator. Usual value is 0.1 eV to reproduce
                        # experimental broadening at 300K. Increasing the value help the 
                        # convergence with respect to the number of q-points. 
 ngkpt 6 6 6           # Underconverged : k-grid should be at least 4x4x4 for diamond to be converged.
 nshiftk 1
 shiftk 0.0 0.0 0.0
 ngqpt 4 4 4            # Should be converged upon
 qptopt 1
 nshiftq 1
 shiftq 0.0 0.0 0.0

# Ground state density
 iqpt+?    1
 tolvrs?1  1.0d-8     # Underconverged : tolvrs 1.0d-18 should be used for converged results

# Non self-consistent calculation with an arbitrary q point (here Gamma)
 getden?2 -1
 iscf?2   -2
 nqpt?2    1
 nbdbuf?2  2
 tolwfr?2  1.0d-8   # Underconverged : tolwfr 1.0d-22 should be used for converged results
 kptopt?2  3
 
# Computation at Gamma
 getwfk?3 -2
 getwfq?3 -1
 nqpt?3    1
 ieig2rf?3 5            # Static eigenvalues corrections using DFPT (Sternheimer)
 smdelta?3 1            # Flag required to produce the _EIGI2D used to 
                        # compute the lifetime of electronic levels.
                        # smdelta = 1 ==> Fermi-Dirac smearing.
 nbdbuf?3  2            # 2 buffer bands. RF converges much faster.
 rfphon?3  1            # Do phonon response
 rfatpol?3 1 2          # Treat displacements of all atoms
 rfdir?3   1 1 1        # Do all directions 
 tolwfr?3  1.0d-8       # Underconverged : tolwfr 1.0d-22 should be used for converged results
 kptopt?3  3

# Cell dependent parameters
 acell 3*6.675
 rprim 0 .5 .5 .5 0 .5 .5 .5 0
 nsym 1                # Disable symmetries. Symmetries are not yet in production.
 natom 2
 typat 1 1
 xred 3*0.0 3*0.25
 nband 12
 ntypat 1
 znucl 6
 diemac 6
 ecut 10  
 enunit 2
 nstep 50
 istwfk *1

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% need_cpp_vars = HAVE_NETCDF
#%% [files]
#%% files_to_test = 
#%%   tdepes_3.out,  tolnlines= 30, tolabs=  5.000e-05, tolrel=  5.000e-04, fld_options=-medium
#%% psp_files =  6c.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = S. Ponc\'e
#%% keywords = NC, DFPT, EPH
#%% description = Temperature dependence calculation of diamond.
#%%<END TEST_INFO>
