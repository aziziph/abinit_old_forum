# Crystalline BaF2 : computation of the phonon spectrum

   ndtset   10
#Set 1 : ground state self-consistency

  getwfk1   0            # Cancel default
  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
    nqpt1   0            # Cancel default
  tolvrs1   1.0d-18      # SCF stopping criterion (modify default)
  rfphon1   0            # Cancel default
 
#Q vectors for all datasets

#Complete set of symmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.

     nqpt   1            # One qpt for each dataset (only 0 or 1 allowed)
                         # This is the default for all datasets and must
                         #  be explicitly turned off for dataset 1.

     qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
     qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00
     qpt4   2.50000000E-01  0.00000000E+00  0.00000000E+00
     qpt5   5.00000000E-01  0.00000000E+00  0.00000000E+00
     qpt6   2.50000000E-01  2.50000000E-01  0.00000000E+00
     qpt7   5.00000000E-01  2.50000000E-01  0.00000000E+00
     qpt8  -2.50000000E-01  2.50000000E-01  0.00000000E+00
     qpt9   5.00000000E-01  5.00000000E-01  0.00000000E+00
     qpt10 -2.50000000E-01  5.00000000E-01  2.50000000E-01

#Set 2 : Response function calculation of d/dk wave function 

    iscf2   -3         # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolvrs2   0.0        # Cancel default for d/dk
  tolwfr2   1.0d-22    # Use wave function residual criterion instead

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

  getddk3   2          # d/dk wave functions from last dataset
  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-10 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 3      # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of the unit cell
    acell   3*11.52        # This is equivalent to   11.43*11.43*11.43
    rprim   0.0  0.5  0.5   # In lessons 1 and 2, these primitive vectors 
            0.5  0.0  0.5   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
            0.5  0.5  0.0   # that is, the default.

#Definition of the atom types
   ntypat   2         # There are two types of atom
    znucl   56 9     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Ba,
                      # type 2 is the F.

#Definition of the atoms
    natom   3         # There are two atoms
    typat   1 2 2       # The first is of type 1 (Ba), the second is of type 2 (F).
                       
     xred   0.0  0.0  0.0
            0.25 0.25 0.25
            0.75 0.75 0.75
#Gives the number of band, explicitely (do not take the default)
    nband   12         

#Exchange-correlation functional

      ixc   1             # LDA Teter Pade parametrization

#Definition of the planewave basis set

     ecut   50.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
 ngkpt   4 4 4          
  nshiftk   4              # Use one copy of grid only (default)
  shiftk    0.5 0.0 0.0
            0.0 0.5 0.0
            0.0 0.0 0.5
            0.5 0.5 0.5
#Definition of the SCF procedure
     iscf   5          # Self-consistent calculation, using algorithm 5
    nstep   50         # Maximal number of SCF cycles
   diemac   2.7        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
