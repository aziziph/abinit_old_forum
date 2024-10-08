# Crystalline silicon
# Calculation of the GW corrections
# Dataset 1: ground state calculation to get the density 
# Dataset 2: NSCF run to produce the WFK file for 10 k-points in IBZ
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4

############
# Dataset 1
############
# SCF-GS run 
nband1  120
tolvrs1 1.0e-10
tolsym 1.0e-8

############
# Dataset 2
############
# Definition of parameters for the calculation of the WFK file
nband2     240       # Number of (occ and empty) bands to be computed
nbdbuf2     20       # Do not apply the convergence criterium to the last 20 bands (faster)
iscf2       -2
getden2     -1
tolwfr2  1.0d-12     # Will stop when this tolerance is achieved 

############
# Dataset 3
############
# Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      150       # Bands to be used in the screening calculation
ecuteps3    3.6      # Cut-off energy of the planewave set to represent the dielectric matrix. 
                     # It is important to adjust this parameter.
ppmfrq3    16.7 eV   # Imaginary frequency where to calculate the screening

############
# Dataset 4
############
# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      200       # Bands to be used in the Self-Energy calculation
ecutsigx4    8.0     # Dimension of the G sum in Sigma_x. 
                     # ecutsigx = ecut is usually a wise choice
                     # (the dimension in Sigma_c is controlled by ecuteps)


nkptgw4      1       # number of k-point where to calculate the GW correction
kptgw4               # k-points in reduced coordinates
   0.000    0.000    0.000
bdgw4       86  90     # calculate GW corrections for bands from 4 to 5



# Data common to the three different datasets

# Definition of the unit cell: fcc
 natom 20
 ntypat 3
 typat
 1 1 1
 1 2 2
 2 2 3
 3 3 3
 3 3 3
 3 3 3
 3 3
 znucl 55 50 53
 xred
    0.0046830000    0.0233330000    0.7500000000
    0.5046830000    0.4766670000    0.7500000000
    0.9953170000    0.9766670000    0.2500000000
    0.4953170000    0.5233330000    0.2500000000
    0.5000000000    0.0000000000    0.0000000000
    0.0000000000    0.5000000000    0.5000000000
    0.0000000000    0.5000000000    0.0000000000
    0.5000000000    0.0000000000    0.5000000000
    0.7030980000    0.7036720000    0.9924360000
    0.2969020000    0.2963280000    0.4924360000
    0.7030980000    0.7036720000    0.5075640000
    0.2969020000    0.2963280000    0.0075640000
    0.5026480000    0.9800180000    0.2500000000
    0.2030980000    0.7963280000    0.5075640000
    0.9973520000    0.4800180000    0.7500000000
    0.7969020000    0.2036720000    0.4924360000
    0.7969020000    0.2036720000    0.0075640000
    0.4973520000    0.0199820000    0.7500000000
    0.0026480000    0.5199820000    0.2500000000
    0.2030980000    0.7963280000    0.9924360000
 acell    1.0    1.0    1.0
 rprim
   16.5033013895    0.0000000000    0.0000000000
    0.0000000000   16.7660470202    0.0000000000
    0.0000000000    0.0000000000   23.9297568737

# Definition of the k-point grid
ngkpt   6 6 4  
nshiftk 1
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids

istwfk  *1         # This is mandatory in all the GW steps.

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 45          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   20        # Maximal number of SCF cycles
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


 pp_dirpath "$ABI_PSPDIR"
 pseudos "Perovskites/Cs.GGA_PBE-JTH.xml, Perovskites/Sn.GGA_PBE-JTH.xml, Perovskites/I.GGA_PBE-JTH.xml"

##############################################################
# This section is used only for regression testing of ABINIT #
##############################################################
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_1.abo, tolnlines= 10, tolabs=  0.03, tolrel=  1.500e-01
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = V. Olevano, F. Bruneval, M. Giantomassi
#%% keywords = GW 
#%% description = 
#%%   Crystalline silicon
#%%   Calculation of the GW corrections
#%%   Dataset 1: ground state calculation to get the density 
#%%   Dataset 2: NSCF run to produce the WFK file for 10 k-points in IBZ
#%%   Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
#%%   Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)
#%%<END TEST_INFO>