#MgH2 tetragonal structure (136)
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma
#    * Born effective charges

   ndtset   3

# Set 1 : Initial self-consistent run

    iscf1   5
  kptopt1   1
  tolvrs1   1.0d-18  #need excellent convergence of GS quantities for RF runs


# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

  getwfk2  -1
    iscf2  -3        #this option is needed for ddk
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1        #one wave vector will be specified
     qpt2   0 0 0    #need to specify gamma point
  rfelfd2   2        #set for ddk wf's only
   rfdir2   1 1 1    #full set of directions needed
  tolwfr2   1.0d-20  #only wf convergence can be monitored here

# Set 3 : response-function calculations for all needed perturbations

  getddk3  -1
  getwfk3  -2
    iscf3   5
  kptopt3   2        #use time-reversal symmetry only for k points
    nqpt3   1
     qpt3   0 0 0
  rfphon3   1        #do atomic displacement perturbation
 rfatpol3   1 6      #do for all atoms
  rfstrs3   3        #do strain perturbation
   rfdir3   1 1 1    #the full set of directions is needed
  tolvrs3   1.0d-10  #need reasonable convergence of 1st-order quantities

#Common input data


# acell  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a default value, for automatic testing : suppress it and fill the previous line
    acell     8.5010529169E+00  8.5010529169E+00  5.6769656115E+00 Bohr



  rprim 1 0 0  
       0 1 0 
       0 0 1

#Definition of the atom types and atoms
 ntypat   2 
  znucl   12 1
  natom  6
  typat   1 1 2 2 2 2

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

# xred  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a set of default values, for automatic testing : suppress it and fill the previous line
     xred   0.0 0.0  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       3.0445011166E-01  3.0445011166E-01  0.0000000000E+00
                      -3.0445011166E-01 -3.0445011166E-01  0.0000000000E+00
                       8.0445011166E-01  1.9554988834E-01  5.0000000000E-01
                       1.9554988834E-01  8.0445011166E-01  5.0000000000E-01


#Gives the number of bands, explicitely (do not take the default)
  nband   13              # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
   ecut   60.0            # Maximum kinetic energy cutoff (Hartree)
 ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grid
 kptopt   1              # Use symmetry and treat only inequivalent points
  ngkpt   4 4 4          # 4x4x4 Monkhorst-Pack grid
nshiftk   1              # Use one copy of grid only (default)
 shiftk   0.5 0.5 0.5    # This choice of origin for the k point grid
                         # preserves the hexagonal symmetry of the grid,
                         # which would be broken by the default choice.

#Definition of the self-consistency procedure
 diemac   4.0            # Model dielectric preconditioner
   iscf   5              # Use conjugate-gradient SCF cycle
  nstep   1000             # Maxiumum number of SCF iterations
# enforce calculation of forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = telast_2.in, telast_3.in
#%% [files]
#%% files_to_test = 
#%%   telast_2.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -easy
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = NC, DFPT 
#%% description = 
#%%<END TEST_INFO>
