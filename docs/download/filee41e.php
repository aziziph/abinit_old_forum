#CdS-elastic constant calculation

   ndtset   12        # Total number of datasets (3*4)
   udtset   3  4      # Double loop for k-sample convergence study

# Set 1 : Initial self-consistent and lattice optimization run

  getwfk?1   0
  ionmov?1   2        # Broyden lattice optimization scheme
   ntime?1   25        # Maximim lattice optimization steps
 optcell?1   1        # Optimize cell volume only
 strfact?1   100      # Test convergence of stresses (Hartree/bohr^3) by
                      # multiplying by this factor and applying force
                      # convergence test
  tolmxf?1   1.0e-6   # Convergence limit for forces as above
  tolvrs?1   1.0d-18  # Need excellent convergence of GS quantities for RF runs

# Set 2 : Additional iteration to print density just at converged acell

  prtden?2   1        # Third dataset needs density
  tolvrs?2   1.0d-18

# Set 3 : Converge unoccupied wave functions

  getden?3   -1       # Use density from previout set
  tolwfr?3   5.0d-19  # Only wave function convergence can be used with
                      # non-self-consistent calculation
  tolwfr23   1.0d-30  # This is simply for a reason of portability of automatic tests 
  nstep23    10        # This is simply for a reason of portability of automatic tests
  nstep33    20       # This is simply for a reason of portability of automatic tests

# Set 4 : response-function calculations for all needed perturbations

  kptopt?4   2        # Time-reversal only for RF calculation
    nqpt?4   1
     qpt?4   0  0  0  # By symmetry, only need one direction
   rfdir?4   1  0  0
  rfstrs?4   3        # Need both unaxial and shear strains
  tolvrs?4   1.0d-12  # Need reasonable convergence of 1st-order quantities

#Common input data

#Double loop data passing

getcell   -1         # Start from optimized (datasets ?2-?4) or previously
                     # optimized (datasets ?1) acell
 getwfk   -1         # Use last set of wave functions (except datasets ?1)


#Lattice definition
  acell   3*10.96042     # Starting value
  dilatmx   1.6      # Allow for optimization
  rprim   0.0  0.5  0.5
          0.5  0.0  0.5
          0.5  0.5  0.0


#Definition of the atom types and atoms
 ntypat   2 
  znucl   48 16
  natom   2
  typat   1 2

#Atomic position
   xred   0.0  0.0  0.0
          0.25 0.25 0.25

#Definition of the plane wave basis set
   ecut   20.94            # Maximum kinetic energy cutoff (Hartree)
   ecutsm 2               # Smoothing energy needed for lattice parameter
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grid - loop over 3 k-point densities

ngkpt1?   6  6  6          
ngkpt2?   8  8  8          
ngkpt3?   10 10 10

nshiftk   4              # Use one copy of grid only (default)
 shiftk   0.0 0.0 0.5    # This gives the usual fcc Monkhorst-Pack grid
          0.0 0.5 0.0
          0.5 0.0 0.0
          0.5 0.5 0.5

#Definition of occupation numbers and number of bands
  nband   18              # With metallic occup
 occopt   5              # Femi-function smearing


#Definition of the self-consistency procedure
   iscf   7              # Use conjugate-gradient SCF cycle (datasets 1 & 3)
  nstep   99             # Maximum number of SCF iterations
                         # This might not be enough for the very demanding #tolwfr?3 above
                         # but was chosen for portability reasons.
# enforce calculation of forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   telast_6.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -medium
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = 
#%% description = 
#%%<END TEST_INFO>
