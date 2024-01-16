namespace CKUT.Core.Services.Ch5.Models
{
    public class Box : Tile
    {
        public bool IsStone()
        {
            return false;
        }

        public bool IsFallingStone()
        {
            return false;
        }

        public bool IsAir()
        {
            return false;
        }

        public bool IsBox()
        {
            return true;
        }

        public bool IsFallingBox()
        {
            return false;
        }
        
        public void MoveHorizontal()
        {
            //Move logic
        }
    }
}