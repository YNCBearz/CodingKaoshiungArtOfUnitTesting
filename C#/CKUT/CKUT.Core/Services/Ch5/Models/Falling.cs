namespace CKUT.Core.Services.Ch5.Models
{
    public class Falling : IFalling
    {
        public bool isFalling()
        {
            return true;
        }

        public bool isRest()
        {
            return false;
        }

        public void MoveHorizontal()
        {
            //move logic for falling
        }
    }
}