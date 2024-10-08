# Crystalline silicon
# Calculation of the GW corrections
# Dataset 1: ground state calculation and calculation of the KSS file for 10 k-points in IBZ
# Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      3

# Definition of parameters for the calculation of the KSS file
kssform1     3
nbandkss1   45       # Number of bands in KSS file (-1 means the maximum possible)
nband1      55       # Number of (occ and empty) bands to be computed
nbdbuf1      5
tolwfr1  1.0d-10     # Will stop when this tolerance is achieved 

# Calculation of the screening (epsilon^-1 matrix)
optdriver2  3        # Screening calculation
getkss2     -1       # Obtain KSS file from previous dataset
nband2      30       # Bands to be used in the screening calculation
ecutwfn2    2.1      # Cut-off energy of the planewave set to represent the wavefunctions. It would be more convenient to keep the default ecut value.
ecuteps2    3.6      # Cut-off energy of the planewave set to represent the dielectric matrix. It is important to adjust this parameter.
ppmfrq2    16.7 eV   # Imaginary frequency where to calculate the screening
awtr2       1        # Note : the default awtr 1 is better

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver3  4        # Self-Energy calculation
getkss3     -2       # Obtain KSS file from dataset 1
getscr3     -1       # Obtain SCR file from previous dataset
nband3       30       # Bands to be used in the Self-Energy calculation
ecutwfn3     5.0     # Planewaves to be used to represent the wavefunctions. It would be ore convenient to keep the default ecut value.
ecutsigx3    6.0     # Dimension of the G sum in Sigma_x. It would be better to keep the default ecut value.
                     # (the dimension in Sigma_c is controlled by ecuteps)

gwcalctyp  0

#nkptgw3      1       # number of k-point where to calculate the GW correction
#kptgw3               # k-points
#  -0.125    0.000    0.000
#bdgw3       4  5     # calculate GW corrections for bands from 4 to 5
icutcoul3   3        # old deprecated value of icutcoul, only used for legacy



# Data common to the three different datasets

# Definition of the unit cell: fcc
                                            
acell      4.95210     4.95210    14.00240  angstrom
angdeg     90.0        90.0       120.0

#rprim     0.285909626805E+01   0.000000000000E+00   0.466746666667E+01  
#         -0.142954813403E+01   0.247605000000E+01   0.466746666667E+01  
#         -0.142954813403E+01  -0.247605000000E+01   0.466746666667E+01  


#rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
#       0.5  0.0  0.5   
#       0.5  0.5  0.0


# Definition of the atom types
ntypat  2         # There is only one type of atom
znucl   23 8          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
# Definition of the atoms
natom  10           # There are two atoms
typat  4*1  6*1        # They both are of type 1, that is, Silicon.
#xred              # Reduced coordinate of atoms
#      0.0  0.0  0.0
#      0.25 0.25 0.25
xangst  
       -2.859096268054E+00  0.000000000000E+00  2.006077173333E-01
        2.937523603808E-16 -4.112533045331E-16  2.133125616000E+00
       -1.429548134027E+00 -2.476050000000E+00 -2.006077173333E-01
        3.818780684950E-16  2.937523603808E-16 -2.133125616000E+00
       -1.551488589859E+00 -7.549476450000E-01 -1.166866666667E+00
        1.429548134027E+00 -9.661547100000E-01 -1.166866666667E+00
        1.219404558325E-01  1.721102355000E+00 -1.166866666667E+00
        1.551488589859E+00  7.549476450000E-01  1.166866666667E+00
       -1.429548134027E+00  9.661547100000E-01  1.166866666667E+00
       -1.219404558325E-01 -1.721102355000E+00  1.166866666667E+00

# Definition of the k-point grid
#nkpt    10
paral_kgb  0
ngkpt   4 4 4  
#nshiftk 4
#shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
#        0.5 0.0 0.0
#        0.0 0.5 0.0
#        0.0 0.0 0.5
istwfk  *1         # This is mandatory in all the GW steps.

# Use only symmorphic operations
symmorphi 0

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut  8.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   60        # Maximal number of SCF cycles
#toldfe  1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_1.out, tolnlines= 70, tolabs=  1.010e-03, tolrel=  3.000e-02
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = 
#%% keywords = GW 
#%% description = 
#%%<END TEST_INFO>
