# Crystalline InAs
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the WFK file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)
inclvkb 0
ndtset      4

ngkpt    2 2 2         # Density of k points used for the automatic tests of the tutorial
#ngkpt    4 4 4        # Density of k points needed for a converged calculation

nshiftk  4
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point, which is the point at which
         0.0 0.5 0.5  # we will compute the (direct) band gap. There are 19 k points
         0.5 0.0 0.5  # in the irreducible Brillouin zone, if ngkpt 4 4 4 is used.
         0.5 0.5 0.0
istwfk  *1            # For the GW computations, do not take advantage of the 
                      # specificities of k points to reduce the number of components of the
                      # wavefunction.
tolwfr  1.0d-10 
  
#*************@@@@@@@@@@@@@@@@@@@@@@@@@%%%%%%%%%%%%%%%%%%%%%
# Dataset1: usual self-consistent ground-state calculation
#*************@@@@@@@@@@@@@@@@@@@@@@@@@%%%%%%%%%%%%%%%%%%%%

# Definition of the k-point grid
shiftk1  0.5 0.5 0.5  # This grid is the most economical, but does not contain the Gamma point.
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
istwfk1 *0            # For the ground state, let the code use the time-reversal symmetry
tolvrs1 1e-10

#@@@@@@@@@@@@@@@@@$$$$$$$$$$$$$$$%%%%%%%%%%%%%%^^^^^^^^^^^^^********************
# Dataset2: calculation of WFK file
#@@@@@@@@@@@@@@@@$$$$$$$$$$$$$$$$$$$$$$$$%%%%%%%%^^^^^^^^^^^*******************

# Definition of k-points
iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
nband2   450
#============================
#nband2   105
#============================
nbdbuf2   5

#&&&&&&&&&&&@@@@@@@@@@##########$$$$$$$$$********+++++++++^^^^#@$%
# Dataset3: Calculation of the screening (epsilon^-1 matrix)
#$$$$&&&&&&&&&&&&***********@@@@@@@@@$$$$$$$$$&*((((()))))))))++++

optdriver3   3       # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      200       # Bands to be used in the screening calculation
ecutwfn3    18      # Planewaves to be used to represent the wavefunctions
ecuteps3    22     # Dimension of the screening matrix
#============================
#nband3      25
#ecutwfn3    3.6      # Planewaves to be used to represent the wavefunctions
#ecuteps3    6.0      # Dimension of the screening matrix
#============================
ppmfrq3    16.7 eV  # Imaginary frequency where to calculate the screening


#&&&&&&&&&&&@@@@@@@@@@##########$$$$$$$$$********+++++++++^^^^#@$%
# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
#&&&&&&&&&&&@@@@@@@@@@##########$$$$$$$$$********+++++++++^^^^#@$%

optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      400     # Bands to be used in the Self-Energy calculation
ecutwfn4    20      # Planewaves to be used to represent the wavefunctions
ecutsigx4   22     # Dimension of the G sum in Sigma_x
#================================
#nband4      100  
#ecutwfn4    5.0      # Planewaves to be used to represent the wavefunctions
#ecutsigx4    6.0     # Dimension of the G sum in Sigma_x 
#================================                    
nkptgw4      1               # number of k-point where to calculate the GW correction
kptgw4                       # k-points
  0.000    0.000    0.000    # (Gamma)
bdgw4       14  15             # calculate GW corrections for bands from 4 to 5


########@@@@@@@@@@@%%%%%%%%%%%%^^^^^^^^^^^^^&&&&&&&&&&&&&&&************************
########@@@@@@@@@@@%%%%%%%%%%%%^^^^^^^^^^^^^&&&&&&&&&&&&&&&************************

# Definition of the unit cell: fcc
acell  3*9.0  # This is equivalent to   10.217 10.217 10.217
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

# Definition of the atom types
ntypat  2         # There is only one type of atom
znucl 49 33         # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
# Definition of the atoms
natom 2           # There are two atoms
typat  1 2        # They both are of type 1, that is, Silicon.
xred              # Reduced coordinate of atoms
      0.0  0.0  0.0
      0.25 0.25 0.25

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut    45.0
ecutsm 0.5
#============================
#ecut 8.0 
#============================

# Definition of the SCF procedure
nstep   1000        # Maximal number of SCF cycles

