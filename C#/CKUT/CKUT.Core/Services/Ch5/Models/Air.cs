namespace CKUT.Core.Services.Ch5.Models
{
    public class Air : Tile
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
            return true;
        }

        public bool IsBox()
        {
            return false;
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